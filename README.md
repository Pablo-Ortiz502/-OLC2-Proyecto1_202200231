# 📘 Intérprete con ANTLR4 — Documentación General

---

## ¿Qué es ANTLR4?

**ANTLR4** (Another Tool for Language Recognition) es una herramienta que genera automáticamente un **lexer** y un **parser** a partir de una gramática formal escrita en su propio lenguaje (`.g4`).

### ¿Para qué sirve?

Dado un archivo de gramática, ANTLR4 genera el código fuente (en Go, Java, Python, etc.) que es capaz de:

1. **Tokenizar** (Lexer): leer el texto de entrada carácter por carácter y agruparlos en tokens (`ID`, `NUM`, `IF`, `+`, etc.)
2. **Parsear** (Parser): organizar esos tokens según las reglas de la gramática y construir un **AST** (Abstract Syntax Tree / Árbol de Sintaxis Abstracta)

```
Código fuente
     │
     ▼
  [ LEXER ]  →  tokens  →  [ PARSER ]  →  AST
```

El AST representa la estructura jerárquica del programa. Por ejemplo, `x = 5 + 3` genera un árbol donde la raíz es una asignación, con hijo izquierdo `x` y hijo derecho una suma de `5` y `3`.

### ¿Por qué usar ANTLR4?

- No hay que escribir el lexer/parser a mano
- Soporta gramáticas con prioridad de operadores definida por el orden de las alternativas
- Genera código listo para usar en múltiples lenguajes (Go, Java, Python, C#, etc.)
- Integra el patrón **Visitor** y **Listener** para recorrer el árbol
- Provee un **ErrorListener** integrado para capturar errores léxicos y sintácticos automáticamente

---

## El Patrón Visitor

Una vez que ANTLR4 construye el AST, se necesita **recorrerlo** para ejecutar el programa. El patrón **Visitor** es la forma más flexible de hacerlo.

### ¿Cómo funciona?

ANTLR4 genera una interfaz `Visitor` con un método `Visit` por cada regla de la gramática. El intérprete implementa esta interfaz y define **qué hacer** cuando se visita cada nodo del árbol.

```
         AST
          │
    ┌─────┴──────┐
    │            │
  [Asig]      [IfStmt]
  x = 5+3    if x > 0 { ... }
    │
  [Visit Asig]  ← el Visitor ejecuta esta lógica
    │
  evalúa expr → busca/guarda en entorno actual de la pila
```

### Flujo general del Visitor

```
visitProgram()
  └── visitBlock()
        └── visitStmts() x N
              ├── visitDec()      → declara variable en entorno del tope
              ├── visitAsig()     → actualiza valor en entorno
              ├── visitIfStmt()   → evalúa condición, push/pop de entorno
              ├── visitForStmt()  → push/pop de entorno por iteración
              ├── visitFuncCall() → push de nuevo entorno con parámetros
              └── visitPrintln()  → escribe en buffer de consola
```

Cada `visit` devuelve un valor que puede ser usado por su nodo padre (por ejemplo, `visitExpr` devuelve el resultado numérico o booleano de la expresión).

---

## Manejo de Scopes — Pila de Entornos

El intérprete gestiona los ámbitos de ejecución mediante una **pila de entornos**. Cada entorno es una tabla local que almacena las variables del scope activo. Al entrar a un nuevo bloque (función, if, for, etc.) se hace **push** de un entorno nuevo; al salir se hace **pop**, destruyendo las variables locales de ese scope.

```
PILA DE ENTORNOS durante la ejecución de dividir(10, 2)
┌─────────────────────────────┐  ← tope de la pila (scope activo)
│  Entorno: dividirfunc       │
│  ├── a  = 10  (int32)       │
│  └── b  = 2   (int32)       │
├─────────────────────────────┤
│  Entorno: main              │
│  ├── resultado = 5 (int32)  │
│  └── ok = true  (bool)      │
├─────────────────────────────┤
│  Entorno: Global            │
│  ├── dividir → Funcion      │
│  └── main    → method       │
└─────────────────────────────┘
```

Cuando el Visitor necesita resolver una variable, recorre la pila desde el tope hacia abajo hasta encontrarla. Cuando la función retorna, se hace **pop** del entorno `dividirfunc` y la pila vuelve al estado anterior.

### Ciclo de vida de un entorno

```
Llamada a función / entrada a bloque
         │
         ▼
   push(NuevoEntorno)
   enlaza parámetros en el entorno nuevo
         │
         ▼
   Visitor ejecuta el bloque (stmts)
   variables nuevas  → se agregan al entorno del tope
   lecturas/escrituras → se buscan desde el tope hacia Global
         │
         ▼
   Fin del bloque / return
         │
         ▼
   pop() → entorno destruido, vuelve al scope anterior
```

---

## Tablas del Intérprete

El intérprete mantiene **tres estructuras de datos** independientes durante la ejecución:

### 1. Tabla de Símbolos Estática

Es una tabla **global y persistente** que se llena a medida que el Visitor encuentra declaraciones. No se destruye con los scopes: su propósito es guardar un registro completo de todos los identificadores del programa para análisis, depuración y reporte final.

Almacena por cada símbolo:

| Campo             | Descripción                                           |
| ----------------- | ----------------------------------------------------- |
| `n`               | Número de orden en que fue declarado                  |
| `name`            | Nombre del identificador                              |
| `ScopeName`       | Nombre del scope donde fue declarado                  |
| `type`            | Tipo de dato (`int32`, `bool`, `array int32`, etc.)   |
| `kind`            | Categoría (`var`, `const`, `Funcion`, `Metodo`, etc.) |
| `val`             | Último valor conocido                                 |
| `line` / `column` | Posición en el código fuente                          |

Esta tabla es la que se serializa y se devuelve al frontend en la respuesta JSON, agrupada por scope.

### 2. Pila de Entornos (Runtime)

Estructura dinámica usada **durante la ejecución** para resolver variables en tiempo real. Cada entorno contiene solo las variables del scope activo. Se consulta en cada lectura/escritura de variable y se descarta al hacer pop. No se reporta directamente al frontend, pero actualiza los valores de la tabla estática.

### 3. Tabla de Errores

Lista acumulativa de **todos los errores** encontrados durante el proceso. Se alimenta de dos fuentes distintas:

- **ErrorListener de ANTLR4** → errores léxicos y sintácticos detectados automáticamente durante el lexing y parsing
- **Visitor (manual)** → errores semánticos detectados durante el recorrido del AST

Al finalizar, esta tabla unificada se devuelve al frontend como el campo `errorTable`.

---

## Manejo de Errores — ErrorListener de ANTLR4

Los errores **léxicos y sintácticos** no son detectados por el Visitor sino por el propio ANTLR4 a través de su mecanismo de **ErrorListener**. Se implementa una struct/clase que sobreescribe el método `SyntaxError` del ErrorListener base. Cada error capturado se convierte a un objeto con línea, columna, descripción y tipo, y se agrega a la tabla de errores compartida.

```
Código fuente
     │
     ▼
  [ LEXER ]
     │── token inválido (@, #, carácter no reconocido)
     │       └──→ ErrorListener.SyntaxError() → errorTable (Léxico)
     ▼
  [ PARSER ]
     │── estructura inválida (if sin condición, llave sin cerrar)
     │       └──→ ErrorListener.SyntaxError() → errorTable (Sintáctico)
     ▼
  [ VISITOR ]
     │── condición semántica inválida
             └──→ registro manual → errorTable (Semántico)
```

### Tipos de errores

| Tipo         | Detectado por        | Cuándo ocurre                                             |
| ------------ | -------------------- | --------------------------------------------------------- |
| `Lexico`     | ANTLR4 ErrorListener | Token no reconocido (`@`, `$`, carácter inválido)         |
| `Sintactico` | ANTLR4 ErrorListener | Estructura inválida, token inesperado, llave sin cerrar   |
| `Semantico`  | Visitor (manual)     | Variable no declarada, tipo incorrecto, división por cero |

---

## La Gramática

### Estructura general

```antlr
s: functiondec* program functiondec* EOF;
program: FUNC MAIN '(' ')' block;
```

Un programa es una función `main` obligatoria, opcionalmente rodeada de declaraciones de funciones. Todo termina con `EOF`.

---

### Declaración de Funciones (`functiondec`)

```antlr
functiondec:
    FUNC ID '(' paramlist? ')' typelist block   # MultFunc
  | FUNC ID '(' paramlist? ')' type block       # SimpleFunc
  | FUNC ID '(' paramlist? ')' block            # method;
```

| Tipo         | Descripción               | Ejemplo                              |
| ------------ | ------------------------- | ------------------------------------ |
| `MultFunc`   | Retorna múltiples valores | `func div(a, b int32) (int32, bool)` |
| `SimpleFunc` | Retorna un solo valor     | `func suma(a, b int32) int32`        |
| `method`     | No retorna nada (void)    | `func imprimir(s string)`            |

Al visitarse una `functiondec`, el Visitor registra la función en la **tabla de símbolos estática** y en el **entorno Global** de la pila, pero **no ejecuta su cuerpo** en ese momento. El cuerpo solo se ejecuta cuando se encuentra una `funcCall` correspondiente.

---

### Sentencias (`stmts`)

```antlr
stmts:
    arraydec | asg | ifStmt | forStmt | inst
  | reserved | pri | switchStmt | funcCall
  | dec | returnStmt;
```

#### 📦 Declaración de variables (`dec`)

```antlr
dec:
    pre lid type '=' lval   # Declv      →  var x int32 = 5
  | pre lid type            # Decl       →  var x int32
  | lid ':=' lval           # Sdec       →  x := 5
```

- `pre` puede ser `var` o `const`
- `lid` permite múltiple asignación: `a, b := 1, 2`
- `:=` infiere el tipo automáticamente del valor asignado
- Al declarar: se agrega al **entorno del tope** de la pila y se registra en la **tabla estática**

#### 📦 Declaración de arreglos (`arraydec`)

```antlr
arraydec:
    PVAR ID larray type '=' arrVal   # LongArrayDec  →  var m [3]int32 = {1,2,3}
  | PVAR ID larray type              # ShortArrayDec →  var m [3]int32
```

- `larray` define las dimensiones: `[3]` para 1D, `[2][2]` para 2D (matrices)
- Soporta matrices multidimensionales anidadas con `arrayValue` recursivo
- `ShortArrayDec` inicializa con valores por defecto según el tipo (`0`, `false`, `""`, etc.)

#### ✏️ Asignación (`asg`)

```antlr
asg:
    ID larrayexp '=' expr   # ArrayAsig  →  m[0][1] = 99
  | ID '=' expr             # Asig       →  x = x + 1
  | ID '+=' expr            # PlusAsig
  | ID '-=' expr            # MinusAsig
  | ID '*=' expr            # MultAsig
  | ID '/=' expr            # DivAsig
  | incdec                  # Inde       →  x++ / x--
```

El Visitor busca la variable recorriendo la pila desde el tope hasta Global. Si no la encuentra, registra un **error semántico**. Si la encuentra, actualiza su valor en el entorno correspondiente y en la tabla estática.

#### 🔀 Condicional (`ifStmt`)

```antlr
ifStmt: IF expr block (ELSE block)?;
```

- La condición es cualquier `expr` que evalúe a `bool`
- Al entrar al bloque `if` o `else` se hace **push** de un nuevo entorno; al salir **pop**
- No tiene `else if` explícito, pero se puede anidar un `ifStmt` dentro del bloque `else`

#### 🔁 Bucles (`forStmt`)

```antlr
forStmt:
    FOR dec ';' expr ';' incdec block   # LongFor   →  for var i int32 = 0; i < 10; i++
  | FOR expr block                      # MidFor    →  for x > 0 { }
  | FOR block                           # ShortFor  →  for { }
```

Tres variantes: clásico con índice, tipo `while`, e infinito. Cada iteración hace **push/pop** de entorno. `BREAK` y `CONTINUE` se implementan como señales internas que el Visitor del `for` captura.

#### 🔀 Switch (`switchStmt`)

```antlr
switchStmt: SWITCH expr '{' caseClause+ defaultClause? '}';
caseClause:   CASE lval ':' stmts;
defaultClause: DEFAULT ':' stmts;
```

Evalúa una expresión y la compara con cada `case`. Si ninguno coincide ejecuta `default`. Sin `fallthrough` implícito.

#### 📞 Llamada a función (`funcCall`)

```antlr
funcCall: ID '(' lvalpar? ')' # FunReturn;
```

- Al visitarla: **push** de nuevo entorno, enlace de parámetros, ejecución del bloque, **pop**
- Los argumentos pueden ser expresiones o referencias (`&ID` para paso por referencia con `*`)
- El valor de retorno viaja de vuelta al nodo padre

#### ↩️ Retorno (`returnStmt`)

```antlr
returnStmt: RETURN lval;
```

`lval` puede ser lista de expresiones para retornos múltiples: `return a / b, true`. Se implementa como una señal interna que el visitador de `funcCall` captura antes de hacer pop del entorno.

#### 🖨️ Print (`pri`)

```antlr
pri: PRINT '(' lval ')' # Println;
```

Equivale a `fmt.Println(...)`. El Visitor acumula la salida en un **buffer de consola** que al finalizar se devuelve como campo `console` en la respuesta JSON.

#### 🔧 Funciones reservadas (`reserved`)

| Función                  | Descripción                                              |
| ------------------------ | -------------------------------------------------------- |
| `typeOf(expr)`           | Devuelve el tipo como string (`"int32"`, `"bool"`, etc.) |
| `now()`                  | Devuelve el timestamp actual                             |
| `len(expr)`              | Devuelve el tamaño de un arreglo                         |
| `substr(s, inicio, fin)` | Extrae una subcadena                                     |

#### ⛔ Control de flujo (`inst`)

```antlr
inst: BREAK | CONTINUE;
```

Señales internas: `BREAK` detiene el ciclo, `CONTINUE` salta a la siguiente iteración haciendo pop del entorno actual y recomenzando el bloque.

---

### Expresiones (`expr`)

```antlr
expr:
    expr ('*' | '/' | '%') expr          # MulDivMod
  | expr ('+' | '-') expr                # AddSub
  | '!' expr                             # Not
  | expr ('==' | '!=') expr              # EqNotEq
  | expr ('>=' | '<=' | '>' | '<') expr  # MoreLessEq
  | expr ('&&' | '||') expr              # AndOr
  | '(' expr ')'                         # Parens
  | vals                                 # va
  | reserved                             # re;
```

La precedencia está codificada en el **orden de las alternativas**. El Visitor evalúa recursivamente cada sub-expresión y devuelve el valor al nodo padre.

---

## Integración Backend + Frontend

### Arquitectura general

```
┌────────────────────────────────────────────────────────┐
│                    FRONTEND (PHP/HTML)                 │
│                                                        │
│   [ Editor CodeMirror ]  →  botón Ejecutar             │
│          │                                             │
│          │  POST /interpreter                          │
│          │  { "input": "func main() { ... }" }         │
└──────────┼─────────────────────────────────────────────┘
           │  HTTP JSON
           ▼
┌────────────────────────────────────────────────────────┐
│                    BACKEND (Go)                        │
│                                                        │
│  1. Recibe JSON con el código fuente                   │
│  2. Pasa el input al Lexer  (ANTLR4 generado)          │
│  3. ErrorListener captura errores léxicos              │
│  4. Pasa los tokens al Parser (ANTLR4 generado)        │
│  5. ErrorListener captura errores sintácticos          │
│  6. El Parser construye el AST                         │
│  7. El Visitor recorre el AST:                         │
│     ├── Ejecuta sentencias sobre la pila de entornos   │
│     ├── Llena la tabla de símbolos estática            │
│     ├── Registra errores semánticos en errorTable      │
│     └── Acumula salida en el buffer de consola         │
│  8. Serializa y responde con JSON                      │
└────────────────────────────────────────────────────────┘
```

### Request (Frontend → Backend)

```json
{
  "input": "func main() {\n  var x int32 = 10\n  fmt.Println(x)\n}"
}
```

### Response (Backend → Frontend)

```json
{
  "console": " 10\n",
  "symbolTable": {
    "0": {
      "main": {
        "ScopeName": "Global",
        "type": "method",
        "kind": "method",
        "line": 1,
        "column": 5
      }
    },
    "1": {
      "x": {
        "ScopeName": "main",
        "type": "int32",
        "kind": "var",
        "val": 10,
        "line": 2,
        "column": 6
      }
    }
  },
  "errorTable": [
    {
      "n": 1,
      "desc": "Variable 'y' no declarada",
      "type": "Semantico",
      "line": 5,
      "column": 3
    }
  ]
}
```

> La `symbolTable` se agrupa por índice de scope. Cada key numérica (`"0"`, `"1"`, ...) corresponde a un scope distinto. La pila de entornos es temporal durante la ejecución, pero la tabla estática persiste y es la que se reporta aquí.

### ¿Qué hace el frontend con la respuesta?

| Campo         | Uso en el frontend                                         |
| ------------- | ---------------------------------------------------------- |
| `console`     | Se muestra en la Consola de Salida                         |
| `symbolTable` | Se renderiza en la Tabla de Símbolos, una fila por símbolo |
| `errorTable`  | Se renderiza en el Reporte de Errores con colores por tipo |

---

## Flujo completo de ejecución

```
Usuario escribe código en el editor
         │
         ▼
  Clic en "Ejecutar / Analizar"
         │
         ▼
  Frontend: POST { "input": código } → /interpreter
         │
         ▼
  Backend: ANTLR4 Lexer tokeniza
         │   └── token inválido → ErrorListener → errorTable (Léxico)
         ▼
  Backend: ANTLR4 Parser construye AST
         │   └── estructura inválida → ErrorListener → errorTable (Sintáctico)
         ▼
  Backend: Visitor recorre el AST
         │
         ├── push(EntornoGlobal)
         ├── registra funciones en tabla estática + entorno global
         ├── push(EntornoMain)
         │     ├── visitDec/ArrayDec → agrega a entorno del tope + tabla estática
         │     ├── visitAsig → actualiza en entorno + tabla estática
         │     ├── visitIfStmt → push/pop entorno del bloque
         │     ├── visitForStmt → push/pop entorno por iteración
         │     ├── visitFuncCall → push entorno función, ejecuta, pop
         │     └── visitPrintln → acumula en buffer consola
         │   └── error semántico detectado → errorTable (Semántico)
         ├── pop(EntornoMain)
         └── pop(EntornoGlobal)
         │
         ▼
  Backend: serializa console + symbolTable estática + errorTable unificada
         │
         ▼
  Frontend: muestra consola, llena tablas, habilita descargas PDF
```
