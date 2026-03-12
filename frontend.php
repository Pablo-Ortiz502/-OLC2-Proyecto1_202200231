<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editor de Código</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/dracula.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/go/go.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/matchbrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/closebrackets.min.js"></script>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #f0f2f5;
            --surface: #ffffff;
            --border: #d1d5db;
            --text: #1e293b;
            --text-muted: #64748b;
            --accent: #2563eb;
            --accent-h: #1d4ed8;
            --green: #16a34a;
            --green-h: #15803d;
            --red: #dc2626;
            --yellow: #d97706;
            --console-bg: #1e1e2e;
            --console-fg: #cdd6f4;
            --radius: 10px;
            --shadow: 0 1px 4px rgba(0, 0, 0, .08), 0 4px 16px rgba(0, 0, 0, .06);
        }

        body {
            font-family: 'Sora', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            padding: 0;
        }

        .topbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 10px 24px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
        }

        .topbar-title {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--accent);
            letter-spacing: -.3px;
            margin-right: 12px;
            white-space: nowrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 16px;
            border: none;
            border-radius: var(--radius);
            font-family: 'Sora', sans-serif;
            font-size: .82rem;
            font-weight: 600;
            cursor: pointer;
            transition: background .15s, transform .1s, box-shadow .15s;
            white-space: nowrap;
            text-decoration: none;
        }

        .btn:active {
            transform: scale(.97);
        }

        .btn-default {
            background: var(--surface);
            border: 1.5px solid var(--border);
            color: var(--text);
        }

        .btn-default:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 2px 8px rgba(37, 99, 235, .25);
        }

        .btn-primary:hover {
            background: var(--accent-h);
        }

        .btn-green {
            background: var(--green);
            color: #fff;
            box-shadow: 0 2px 8px rgba(22, 163, 74, .25);
        }

        .btn-green:hover {
            background: var(--green-h);
        }

        .btn-danger {
            background: #fff;
            border: 1.5px solid #fca5a5;
            color: var(--red);
        }

        .btn-danger:hover {
            background: #fef2f2;
        }


        #fileInput {
            display: none;
        }


        .main-layout {
            display: grid;
            grid-template-columns: 1fr 260px;
            gap: 20px;
            padding: 20px 24px;
            max-width: 1300px;
            margin: 0 auto;
        }


        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .panel-header {
            padding: 10px 16px;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--text-muted);
            border-bottom: 1px solid var(--border);
            background: #f8fafc;
        }


        .editor-wrap {
            height: 600px;
            overflow: hidden;
        }

        .CodeMirror {
            height: 600px !important;
            font-family: 'JetBrains Mono', monospace !important;
            font-size: .88rem !important;
            line-height: 1.6 !important;
        }

        .CodeMirror-scroll {
            height: 600px;
        }


        .console-box {
            background: var(--console-bg);
            color: var(--console-fg);
            font-family: 'JetBrains Mono', monospace;
            font-size: .84rem;
            line-height: 1.7;
            padding: 14px 18px;
            min-height: 120px;
            max-height: 400px;
            overflow-y: auto;
            white-space: pre-wrap;
        }

        .console-box.empty {
            color: #585b70;
            font-style: italic;
        }


        .report-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 12px 16px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-family: 'Sora', sans-serif;
            font-size: .84rem;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            transition: background .15s, border-color .15s;
            text-align: left;
        }

        .report-btn:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }

        .report-btn .icon {
            width: 28px;
            height: 28px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .icon-blue {
            background: #dbeafe;
            color: var(--accent);
        }

        .icon-red {
            background: #fee2e2;
            color: var(--red);
        }

        .icon-green {
            background: #dcfce7;
            color: var(--green);
        }

        .sidebar-stack {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }


        .tables-section {
            grid-column: 1 / -1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: .82rem;
        }

        .data-table thead tr {
            background: #f1f5f9;
        }

        .data-table th {
            padding: 9px 12px;
            font-weight: 700;
            text-align: left;
            color: var(--text-muted);
            font-size: .75rem;
            letter-spacing: .05em;
            text-transform: uppercase;
            border-bottom: 2px solid var(--border);
        }

        .data-table td {
            padding: 8px 12px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--text);
            font-family: 'JetBrains Mono', monospace;
            font-size: .8rem;
        }

        .data-table tr:last-child td {
            border-bottom: none;
        }

        .data-table tr:hover td {
            background: #f8fafc;
        }

        .table-scroll {
            overflow-x: auto;
            max-height: 260px;
            overflow-y: auto;
        }

        .badge {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 99px;
            font-size: .72rem;
            font-weight: 700;
            font-family: 'Sora', sans-serif;
        }

        .badge-blue {
            background: #dbeafe;
            color: #1e40af;
        }

        .badge-red {
            background: #fee2e2;
            color: #991b1b;
        }

        .badge-yellow {
            background: #fef9c3;
            color: #854d0e;
        }

        .badge-green {
            background: #dcfce7;
            color: #14532d;
        }

        .empty-state {
            padding: 30px;
            text-align: center;
            color: var(--text-muted);
            font-size: .85rem;
            font-style: italic;
        }

        .spinner {
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 2px solid rgba(255, 255, 255, .4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .6s linear infinite;
            vertical-align: middle;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        #toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1e293b;
            color: #f8fafc;
            padding: 11px 20px;
            border-radius: var(--radius);
            font-size: .84rem;
            font-weight: 500;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .25);
            opacity: 0;
            transform: translateY(10px);
            transition: opacity .25s, transform .25s;
            z-index: 999;
        }

        #toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 780px) {
            .main-layout {
                grid-template-columns: 1fr;
            }

            .tables-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>


    <div class="topbar">
        <span class="topbar-title">Interpreter</span>

        <button class="btn btn-default" onclick="nuevoArchivo()" title="Nuevo Archivo">
            📄 Nuevo Archivo
        </button>

        <button class="btn btn-default" onclick="document.getElementById('fileInput').click()" title="Abrir Archivo">
            📂 Abrir Archivo
        </button>
        <input type="file" id="fileInput" accept=".txt,.go,.js,.py,.java,.c,.cpp,.cs,.php,.rb,.rs,.ts" onchange="abrirArchivo(event)" />

        <button class="btn btn-default" onclick="guardarCodigo()" title="Guardar como .txt">
            💾 Guardar Código
        </button>

        <button class="btn btn-green" id="btnEjecutar" onclick="ejecutarCodigo()">
            ▶ Ejecutar / Analizar
        </button>

        <button class="btn btn-danger" onclick="limpiarConsola()">
            ✕ Limpiar Consola
        </button>
    </div>


    <div class="main-layout">


        <div style="display:flex;flex-direction:column;gap:20px;">


            <div class="panel">
                <div class="panel-header">Editor de Código</div>
                <div class="editor-wrap">
                    <textarea id="codeEditor"></textarea>
                </div>
            </div>


            <div class="panel">
                <div class="panel-header">Consola de Salida</div>
                <div class="console-box empty" id="consola">Esperando ejecución...</div>
            </div>


            <div class="tables-section">


                <div class="panel">
                    <div class="panel-header">Tabla de Símbolos</div>
                    <div class="table-scroll">
                        <div class="empty-state" id="emptySymbols">Sin datos aún. Ejecuta el código para ver la tabla.</div>
                        <table class="data-table" id="symbolTable" style="display:none;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Scope</th>
                                    <th>Tipo</th>
                                    <th>Kind</th>
                                    <th>Valor</th>
                                    <th>Línea</th>
                                    <th>Col</th>
                                </tr>
                            </thead>
                            <tbody id="symbolBody"></tbody>
                        </table>
                    </div>
                </div>


                <div class="panel">
                    <div class="panel-header">Reporte de Errores</div>
                    <div class="table-scroll">
                        <div class="empty-state" id="emptyErrors">Sin errores reportados.</div>
                        <table class="data-table" id="errorTable" style="display:none;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Línea</th>
                                    <th>Col</th>
                                </tr>
                            </thead>
                            <tbody id="errorBody"></tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


        <div>
            <div class="panel-header" style="border-radius:var(--radius) var(--radius) 0 0; border:1px solid var(--border); border-bottom:none; background:#f8fafc; padding:10px 16px;">Reportes</div>
            <div class="panel" style="border-radius:0 0 var(--radius) var(--radius); padding:14px; display:flex;flex-direction:column;gap:10px;">

                <button class="report-btn" onclick="descargarResultado()">
                    <span class="icon icon-blue">📄</span>
                    Descargar Resultado
                </button>

                <button class="report-btn" onclick="descargarErrores()">
                    <span class="icon icon-red">⚠</span>
                    Descargar Errores
                </button>

                <button class="report-btn" onclick="descargarTablaSimbolos()">
                    <span class="icon icon-green">📊</span>
                    Descargar Tabla de Símbolos
                </button>

            </div>
        </div>

    </div>


    <div id="toast"></div>

    <script>
        let lastResponse = null;


        let editor;
        window.addEventListener('DOMContentLoaded', () => {
            editor = CodeMirror.fromTextArea(document.getElementById('codeEditor'), {
                mode: 'text/x-go',
                theme: 'dracula',
                lineNumbers: true,
                matchBrackets: true,
                autoCloseBrackets: true,
                indentUnit: 2,
                tabSize: 2,
                indentWithTabs: false,
                lineWrapping: false,
                autofocus: true,
                extraKeys: {
                    'Tab': cm => cm.execCommand('insertSoftTab')
                }
            });
        });

        function nuevoArchivo() {
            if (editor.getValue().trim() &&
                !confirm('¿Crear nuevo archivo? Se perderá el contenido actual.')) return;
            editor.setValue('');
            editor.clearHistory();
            limpiarConsola();
        }


        function abrirArchivo(event) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = e => {
                editor.setValue(e.target.result);
                editor.clearHistory();
                mostrarToast(`Archivo "${file.name}" cargado.`);
            };
            reader.readAsText(file);
            event.target.value = '';
        }


        function guardarCodigo() {
            const code = editor.getValue();
            const blob = new Blob([code], {
                type: 'text/plain'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'codigo.txt';
            a.click();
            URL.revokeObjectURL(url);
            mostrarToast('Código guardado como codigo.txt');
        }


        function limpiarConsola() {
            const c = document.getElementById('consola');
            c.textContent = 'Esperando ejecución...';
            c.className = 'console-box empty';
        }


        async function ejecutarCodigo() {
            const code = editor.getValue();
            if (!code.trim()) {
                mostrarToast('El editor está vacío.');
                return;
            }

            const btn = document.getElementById('btnEjecutar');
            btn.innerHTML = '<span class="spinner"></span> Analizando...';
            btn.disabled = true;

            const consola = document.getElementById('consola');
            consola.className = 'console-box';
            consola.textContent = 'Ejecutando...';

            try {
                const payload = JSON.stringify({
                    input: code
                });

                const res = await fetch('http://localhost:8000/interpreter', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: payload
                });

                if (!res.ok) throw new Error(`HTTP ${res.status}: ${res.statusText}`);

                const rawText = await res.text();

                let data;
                try {

                    data = JSON.parse(rawText);
                } catch (e) {

                    const jsonStart = rawText.indexOf('{');
                    if (jsonStart !== -1) {
                        try {
                            data = JSON.parse(rawText.substring(jsonStart));
                        } catch (e2) {

                            consola.textContent = rawText || '(Sin salida)';
                            consola.className = 'console-box';
                            renderizarTablaSimbolos({});
                            renderizarTablaErrores([]);
                            return;
                        }
                    } else {
                        consola.textContent = rawText || '(Sin salida)';
                        consola.className = 'console-box';
                        renderizarTablaSimbolos({});
                        renderizarTablaErrores([]);
                        return;
                    }
                }

                lastResponse = data;


                consola.textContent = data.console || '(Sin salida)';
                consola.className = 'console-box';


                renderizarTablaSimbolos(data.symbolTable || {});
                renderizarTablaErrores(data.errorTable || []);

            } catch (err) {
                consola.textContent = `⚠ Error de conexión:\n${err.message}`;
                consola.className = 'console-box';
                mostrarToast('No se pudo conectar al servidor.');
            } finally {
                btn.innerHTML = '▶ Ejecutar / Analizar';
                btn.disabled = false;
            }
        }


        function renderizarTablaSimbolos(symbolTable) {
            const body = document.getElementById('symbolBody');
            const table = document.getElementById('symbolTable');
            const empty = document.getElementById('emptySymbols');
            body.innerHTML = '';

            const rows = [];
            for (const scopeId in symbolTable) {
                const scope = symbolTable[scopeId];
                for (const name in scope) {
                    rows.push({
                        name,
                        ...scope[name]
                    });
                }
            }

            if (rows.length === 0) {
                table.style.display = 'none';
                empty.style.display = '';
                return;
            }

            empty.style.display = 'none';
            table.style.display = '';

            rows.forEach(r => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
            <td>${r.n ?? ''}</td>
            <td><strong>${r.name}</strong></td>
            <td><span class="badge badge-blue">${r.ScopeName ?? ''}</span></td>
            <td><code>${r.type ?? ''}</code></td>
            <td><span class="badge badge-green">${r.kind ?? ''}</span></td>
            <td>${r.val ?? ''}</td>
            <td>${r.line ?? ''}</td>
            <td>${r.column ?? ''}</td>
    `;
                body.appendChild(tr);
            });
        }


        function renderizarTablaErrores(errorTable) {
            const body = document.getElementById('errorBody');
            const table = document.getElementById('errorTable');
            const empty = document.getElementById('emptyErrors');
            body.innerHTML = '';

            if (!errorTable.length) {
                table.style.display = 'none';
                empty.style.display = '';
                empty.textContent = '✅ Sin errores reportados.';
                return;
            }

            empty.style.display = 'none';
            table.style.display = '';

            const colorMap = {
                'Semantico': 'badge-yellow',
                'Sintactico': 'badge-red',
                'Lexico': 'badge-blue',
            };

            errorTable.forEach(e => {
                const badge = colorMap[e.type] || 'badge-red';
                const tr = document.createElement('tr');
                tr.innerHTML = `
                <td>${e.n}</td>
                <td>${e.desc}</td>
                <td><span class="badge ${badge}">${e.type}</span></td>
                <td>${e.line}</td>
                <td>${e.column}</td>
                `;
                body.appendChild(tr);
            });
        }

        function descargarResultado() {
            const txt = document.getElementById('consola').textContent;
            descargarTxt(txt, 'resultado.txt');
        }

        function descargarErrores() {
            if (!lastResponse) {
                mostrarToast('Ejecuta el código primero.');
                return;
            }
            const errores = lastResponse.errorTable || [];
            if (errores.length === 0) {
                mostrarToast('No hay errores para exportar.');
                return;
            }

            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF({
                orientation: 'landscape'
            });

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(16);
            doc.setTextColor(220, 38, 38);
            doc.text('Reporte de Errores', 14, 16);

            doc.setFontSize(9);
            doc.setTextColor(100, 116, 139);
            doc.setFont('helvetica', 'normal');
            doc.text(`Generado: ${new Date().toLocaleString()}`, 14, 23);

            doc.autoTable({
                startY: 28,
                head: [
                    ['#', 'Descripción', 'Tipo', 'Línea', 'Columna']
                ],
                body: errores.map(e => [e.n, e.desc, e.type, e.line, e.column]),
                headStyles: {
                    fillColor: [220, 38, 38],
                    textColor: 255,
                    fontStyle: 'bold',
                    fontSize: 9
                },
                bodyStyles: {
                    fontSize: 9,
                    textColor: [30, 41, 59]
                },
                alternateRowStyles: {
                    fillColor: [254, 242, 242]
                },
                columnStyles: {
                    0: {
                        cellWidth: 12,
                        halign: 'center'
                    },
                    1: {
                        cellWidth: 'auto'
                    },
                    2: {
                        cellWidth: 30,
                        halign: 'center'
                    },
                    3: {
                        cellWidth: 18,
                        halign: 'center'
                    },
                    4: {
                        cellWidth: 18,
                        halign: 'center'
                    }
                },
                margin: {
                    left: 14,
                    right: 14
                },
                styles: {
                    lineColor: [226, 232, 240],
                    lineWidth: 0.3
                }
            });

            doc.save('errores.pdf');
            mostrarToast('PDF de errores generado.');
        }

        function descargarTablaSimbolos() {
            if (!lastResponse || !lastResponse.symbolTable) {
                mostrarToast('Ejecuta el código primero.');
                return;
            }

            const rows = [];
            for (const scopeId in lastResponse.symbolTable) {
                const scope = lastResponse.symbolTable[scopeId];
                for (const name in scope) {
                    const r = scope[name];
                    rows.push([r.n ?? '', name, r.ScopeName ?? '', r.type ?? '', r.kind ?? '', r.val ?? '', r.line ?? '', r.column ?? '']);
                }
            }

            if (rows.length === 0) {
                mostrarToast('No hay símbolos para exportar.');
                return;
            }

            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF({
                orientation: 'landscape'
            });

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(16);
            doc.setTextColor(37, 99, 235);
            doc.text('Tabla de Símbolos', 14, 16);

            doc.setFontSize(9);
            doc.setTextColor(100, 116, 139);
            doc.setFont('helvetica', 'normal');
            doc.text(`Generado: ${new Date().toLocaleString()}`, 14, 23);

            doc.autoTable({
                startY: 28,
                head: [
                    ['#', 'Nombre', 'Scope', 'Tipo', 'Kind', 'Valor', 'Línea', 'Col']
                ],
                body: rows,
                headStyles: {
                    fillColor: [37, 99, 235],
                    textColor: 255,
                    fontStyle: 'bold',
                    fontSize: 9
                },
                bodyStyles: {
                    fontSize: 9,
                    textColor: [30, 41, 59]
                },
                alternateRowStyles: {
                    fillColor: [239, 246, 255]
                },
                columnStyles: {
                    0: {
                        cellWidth: 12,
                        halign: 'center'
                    },
                    1: {
                        cellWidth: 35,
                        fontStyle: 'bold'
                    },
                    2: {
                        cellWidth: 30
                    },
                    3: {
                        cellWidth: 30
                    },
                    4: {
                        cellWidth: 25
                    },
                    5: {
                        cellWidth: 25
                    },
                    6: {
                        cellWidth: 18,
                        halign: 'center'
                    },
                    7: {
                        cellWidth: 14,
                        halign: 'center'
                    }
                },
                margin: {
                    left: 14,
                    right: 14
                },
                styles: {
                    lineColor: [226, 232, 240],
                    lineWidth: 0.3
                }
            });

            doc.save('tabla_simbolos.pdf');
            mostrarToast('PDF de tabla de símbolos generado.');
        }

        function descargarTxt(content, filename) {
            const blob = new Blob([content], {
                type: 'text/plain'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = filename;
            a.click();
            URL.revokeObjectURL(url);
            mostrarToast(`Descargando ${filename}`);
        }


        function mostrarToast(msg) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.classList.add('show');
            setTimeout(() => t.classList.remove('show'), 2800);
        }
    </script>
</body>

</html>