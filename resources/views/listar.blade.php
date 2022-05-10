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

    <div class="d-flex justify-content-center mt-5">
        <form action="/editar-produto/{{ $produto-> id }}" method="post" class="d-inline">
            @csrf


            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" value="{{ $produto->nome }} ">
            <br><br>

            <label for="lblValor">Valor:</label>
            <input type="text" name="valor" value="{{ $produto->valor }}">
            <br><br>

            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque" value="{{ $produto->estoque }}">
            <br><br>
            <button>Salvar Edições</button>
        </form>

    </div>
    <button onclick="location.href='/'">Voltar</button>
    <button onclick="location.href='/deletar-produto/{{ $produto->id }}'">Deletar</button>
    
    

</body>

</html>