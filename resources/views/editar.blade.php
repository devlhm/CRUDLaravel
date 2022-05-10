<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <h1>Produtos</h1>
    <form action="/editar-produto/{{ $produto-> id }}" method="post">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome">
        <br><br>

        <label for="lblValor">Valor:</label>
        <input type="text" name="valor">
        <br><br>

        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{ $produto->estoque }}">
        <br><br>

        <button>Editar</button>
    </form>
</body>
</html>