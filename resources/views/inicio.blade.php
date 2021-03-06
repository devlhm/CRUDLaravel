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

        <form action="/cadastrar-produto" method="POST" class="m-5 card p-3 text-center col-5">
            @csrf
            <h1 class="card-header">Cadastro</h1>

            <div class="card-body container">
                <div class="row mt-2 mb-2">
                    <label for="nome">Nome:</label>
                    <input class="col-10 mx-auto" type="text" name="nome">
                </div>
                <div class="row mt-2 mb-2">
                    <label for="valor">Valor:</label>
                    <input class="col-10 mx-auto" type="number" min="0" name="valor">
                </div>
                <div class="row mt-2 mb-2">
                    <label for="estoque">Quantidade:</label>
                    <input class="col-10 mx-auto" type="number" min="1" name="estoque">
                </div>
                <div class="row mt-2 mb-2">
                    <label for="fornecedor_id">Nome do Fornecedor:</label>
                    <!-- <input class="col-10 mx-auto" type="number" min="0" name="fornecedor_id"> -->
                    <select class="col-10 mx-auto" name="fornecedor_id">
                        <?php
                            for($i = 0; $i < count($fornecedores); $i++) {
                                echo "<option value=".$fornecedores[$i]["id"].">".$fornecedores[$i]["nome"]."</option>";
                            }
                        ?>
                    </select>
                </div>
                <button class="row btn btn-primary mt-3 col-5 fs-4">Cadastrar</button>
            </div>

        </form>

        <div class="m-5 card p-3 text-center">
            @csrf

            <h1 class="card-header">Listar Produto(s)</h1>


            <div class="card-body container">
                <button class="row btn btn-primary mt-3 mb-2 col fs-4" style="min-width: 90px" onclick="location.href = '/listar-produtos/'">Listar Todos os Produtos</button>
                <hr>
                <div class="row mt-2 mb-2">
                    <label for="id-produto">Produto:</label>
                    <select class="col-10 mx-auto" name="id-produto" id="id-produto">
                        <?php
                            for($i = 0; $i < count($produtos); $i++) {
                                echo "<option value=".$produtos[$i]["id"].">".$produtos[$i]["nome"]."</option>";
                            }
                        ?>
                    </select>
                </div>
                <button class="row btn btn-primary mt-3 col-5 fs-4" style="min-width: 90px" onclick="location.href = '/listar-produto/' + document.getElementById('id-produto').value">Listar</button>

            </div>
        </div>
    </div>


</html>