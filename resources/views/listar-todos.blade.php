<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Estoque</th>
                <th scope="col">Valor</th>
                <th scope="col">Fornecedor</th>
            </tr>
        </thead>
        <?php

        use App\Models\Fornecedor;

        for ($i = 0; $i < count($produtos); $i++) {
            echo "<tr><td>" . $produtos[$i]["id"] . "</td><td>" . $produtos[$i]["nome"] . "</td><td>" . $produtos[$i]["estoque"] . "</td><td>" . $produtos[$i]["valor"] . "</td><td>" . Fornecedor::find(intval($produtos[$i]["fornecedor_id"]))->nome . "</td></tr>";
        }

        ?>

    </table>

    <button class="btn btn-secondary fs-2" onclick="location.href='/'">Voltar</button>

</body>

</html>