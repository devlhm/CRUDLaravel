<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="d-flex flex-column align-items-center">
    <h1>Produtos</h1>

    <div class="d-flex justify-content-center mt-5">

        <form action="/cadastrar-produto" method="POST" class="m-5">
            @csrf
            <h1>Cadastro</h1>

            <label for="lblNome">Nome:</label>
            <input type="text" name="nome">
            <br><br>

            <label for="lblValor">Valor:</label>
            <input type="text" name="valor">
            <br><br>

            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque">
            <br><br>

            <button>Cadastrar</button>
        </form>

        <div class="m-5 card p-3 text-center">
            @csrf

            <h1 class="card-header">Listar Produto</h1>


            <div class="card-body">
                <div class="mt-2 mb-2">
                    <label for="id" class="mb-4">ID do Produto</label>
                    <input type="text" name="id-produto" id="id-produto">
                </div>
                <button class="btn btn-primary col-5 fs-4" onclick="location.href = '/listar-produto/' + document.getElementById('id-produto').value">Listar</button>
            </div>
        </div>
    </div>


</html>