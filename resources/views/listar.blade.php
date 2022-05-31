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
    <h1 style="font-size: 5em;">Produtos</h1>
    <div class="d-flex justify-content-center m-5 mb-2 card p-3 text-center col-2">
        <h1 class="card-header">Produto</h1>
        <form action="/editar-produto/{{ $produto-> id }}" method="post" class="card-body container">
            @csrf

            <div class="row my-2">
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome" value="{{ $produto->nome }} ">
            </div>

            <div class="row my-2">
                <label for="lblValor">Valor:</label>
                <input type="number" name="valor" value="{{ $produto->valor }}">
            </div>

            <div class="row my-2">
                <label for="lblQuantidade">Quantidade:</label>
                <input type="number" name="estoque" value="{{ $produto->estoque }}">
            </div>

            <div class="row my-2">
                <label for="lblFornecedor">ID Fornecedor:</label>
                <input type="number" name="fornecedor_id" value="{{ $produto->fornecedor_id }}">
            </div>
            <button class="row btn btn-primary mt-3 col-8 fs-5">Salvar Edições</button>
        </form>

    </div>
    <button class="btn btn-secondary my-2 fs-5" onclick="location.href='/'">Voltar</button>
    <button class="btn btn-danger fs-5" onclick="location.href='/deletar-produto/{{ $produto->id }}'">Deletar</button>
</body>
</html>