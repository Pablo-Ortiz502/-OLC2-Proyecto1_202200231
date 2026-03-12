grammar Grammar;

s: functiondec* program functiondec* EOF;

program: FUNC MAIN '(' ')' block;

functiondec:
	FUNC ID '(' paramlist? ')' typelist block	# MultFunc
	| FUNC ID '(' paramlist? ')' type block		# SimpleFunc
	| FUNC ID '(' paramlist? ')' block			# method;
paramlist: param (',' param)*;
param:
	ID ref = '*'? larray type	# FuncArrayDec
	| lid ref = '*'? type		# FuncParamDec;
typelist: '(' type (',' type)+ ')';

stmts:
	arraydec
	| asg
	| ifStmt
	| forStmt
	| inst
	| reserved
	| pri
	| switchStmt
	| funcCall
	| dec
	| returnStmt;

pri: PRINT '(' lval ')' # Println;

reserved:
	TYPEOF '(' expr ')'						# TypeO
	| NOW '(' ')'							# NowFunc
	| LEN '(' expr ')'						# LenFunc
	| SUBSTR '(' expr ',' expr ',' expr ')'	# SubS;

block: '{' stmts* '}';
inst: BREAK | CONTINUE;
returnStmt: RETURN lval;

ifStmt: IF expr block (ELSE block)?;

forStmt:
	FOR dec ';' expr ';' incdec block	# LongFor
	| FOR expr block					# MidFor
	| FOR block							# ShortFor;

switchStmt: SWITCH expr '{' caseClause+ defaultClause? '}';
caseClause: CASE lval ':' stmts;
defaultClause: DEFAULT ':' stmts;

arraydec:
	PVAR ID larray type '=' arrVal	# LongArrayDec
	| PVAR ID larray type			# ShortArrayDec;
larrayexp: '[' expr ']' ('[' expr ']')*;
larray: '[' NUM ']' ('[' NUM ']')*;
arrayValue: '{' arrayElements? (',')? '}';
arrayElements: arrayElement (',' arrayElement)*;
arrayElement: expr | arrayValue;

dec:
	pre lid type '=' lval	# Declv
	| pre lid type			# Decl
	| lid ':=' lval			# Sdec;
asg:
	ID larrayexp '=' expr	# ArrayAsig
	| ID '=' expr			# Asig
	| ID '+=' expr			# PlusAsig
	| ID '-=' expr			# MinusAsig
	| ID '*=' expr			# MultAsig
	| ID '/=' expr			# DivAsig
	| incdec				# Inde;

incdec: ID op = ('++' | '--');

expr:
	expr op = ('*' | '/' | '%') expr			# MulDivMod
	| expr op = ('+' | '-') expr				# AddSub
	| '!' expr									# Not
	| expr op = ('==' | '!=') expr				# EqNotEq
	| expr op = ('>=' | '<=' | '>' | '<') expr	# MoreLessEq
	| expr op = ('&&' | '||') expr				# AndOr
	| '(' expr ')'								# Parens
	| vals										# va
	| reserved									# re;

vals:
	NUM							# Num
	| FLOAT						# Float
	| BOOLE						# Boole
	| STRING					# String
	| RUNE						# Rune
	| NIL						# Nil
	| funcCall					# fc
	| larray type arrayValue	# NAV
	| ID larrayexp				# ArrayVal
	| ID						# IdExpr;

arrVal: larray type arrayValue # NewArrayVal;

funcCall: ID '(' lvalpar? ')' # FunReturn;

lid: ID (',' ID)*;
par: ref = '&'? ID | expr;

lvalpar: par (',' par)*;
lval: expr (',' expr)*;

pre: PVAR # Var | PCONST # Const;

type:
	PINT			# Pint
	| PFLOAT		# Pfloat
	| PBOOL			# Pboole
	| PSTRING		# Pstring
	| PRUNE			# Prune
	| larray type	# funArrayType;

FUNC: 'func';
MAIN: 'main';
PVAR: 'var';
PCONST: 'const';
IF: 'if';
ELSE: 'else';
DEFAULT: 'default';
CASE: 'case';
SWITCH: 'switch';
FOR: 'for';
BREAK: 'break';
CONTINUE: 'continue';
RETURN: 'return';
PRINT: 'fmt.Println';
SUBSTR: 'substr';
LEN: 'len';
NOW: 'now';
TYPEOF: 'typeOf';
PINT: 'int32';
PFLOAT: 'float32';
PBOOL: 'bool';
PSTRING: 'string';
PRUNE: 'rune';

NUM: '-'? [0-9]+;
FLOAT: '-'? [0-9]+ '.' [0-9]+;
NIL: 'nil';
BOOLE: 'true' | 'false';
STRING: '"' ( ~["\\\r\n] | '\\' .)* '"';
RUNE: '\'' ~['\r\n] '\'';

ID: [_\p{L}] [_\p{L}\p{Nd}]*;
LINE_COMMENT: '//' ~[\r\n]* -> skip;
BLOCK_COMMENT: '/*' .*? '*/' -> skip;
WS: [ \t\r\n]+ -> skip;
ERROR_CHAR: .;