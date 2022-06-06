<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

Route::get('/', function () {
    $fornecedores = json_decode(Fornecedor::all(), true);
    $produtos = json_decode(Produto::all(), true);
    
    return view('inicio', ['fornecedores' => $fornecedores, 'produtos' => $produtos]);
});

Route::post('/cadastrar-produto', function (Request $request) {
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
        'fornecedor_id' => $request->fornecedor_id
    ]);

    echo "<script>
        alert('Produto criado com sucesso');
        location.href='/';
    </script>";
});

Route::get('/listar-produtos', function () {
    $produtos = json_decode(Produto::all(), true);
    return view('listar-todos', ['produtos' => $produtos]);
});

Route::get('/listar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    $fornecedores = json_decode(Fornecedor::all(), true);
    
    return view('listar', ['fornecedores' => $fornecedores, 'produto' => $produto]);
});

Route::get('/editar-produto/{$id}', function ($id) {
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/editar-produto/{id}', function (Request $request, $id) {
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "<script>
        alert('Produto editado com sucesso');
        location.href='/';
    </script>";
});

Route::get('/deletar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    $produto->delete();

    echo "<script>
        alert('Produto deletado com sucesso');
        location.href='/';
    </script>";
});
