<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exemplo CRUD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        ul {
            display: flex;
            gap: 16px;
        }
    </style>
</head>

<body class="antialiased">
    <div>
        <h1>Olá, bem vindo ao inicio</h1>

        <table>
            <thead>
                <tr>
                    <td>#</td>
                    <td>Descrição</td>
                    <td>Telefone</td>
                    <td>Ação</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($candidatos as $candidato)
                    <tr>
                        <td>{{ $candidato->id }} </td>
                        <td>{{ $candidato->nome }}</td>
                        <td>{{ $candidato->telefone }}</td>
                        <td>
                            <a href='/editar-candidato/{{ $candidato->id }}'>Editar</a>
                            <a href='/excluir-candidato/{{ $candidato->id }}'>Excluir</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <ul class="flex">

        </ul>

        <div>
            <a href="cadastrar-candidato">Criar</a>
        </div>
    </div>
</body>

</html>
