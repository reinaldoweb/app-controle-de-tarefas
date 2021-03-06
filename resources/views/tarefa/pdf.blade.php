<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Lista de Tarefas</title>

    <style>
        .page-break {
            page-break-after: always;
        }

        .titulo {
            border: 1px;
            background-color: #ccc;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            font-weight: bold;
            padding: 25px;
        }

        .tabela {
            width: 100%;
        }

        .table th {
            text-align: left;

        }

    </style>
</head>

<body>
    <div class="titulo">Lista de tarefas</div>

    <table class="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Data limite conclusão</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tarefas as $key => $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="page-break">

        <h2>Página 2</h2>
    </div>
</body>

</html>
