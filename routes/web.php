 <?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para acessar a tela de alteração de usuario
Route::get('/usuario/alterar/{id}', [UsuarioController::class,'telaAlteracao'])->name('usuario.atualiza'); 

//Rota para alterar o cadastro do usuario
Route::post('/usuario/alterar/{id}', 
[UsuarioController::class,'alterar'])->name('usuario.alterar'); 

//Rota para excluir o usuario
Route::get('/usuario/excluir/{id}', 
[UsuarioController::class,'excluir'])->name('usuario.excluir'); 

use App\Http\Controllers\ProdutoController;

// Rota para listar todos os produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

// Rota que direciona para a página que tem o formulário de cadastro de produto
Route::get('/produtos/cadastro', [ProdutoController::class, 'cadastro'])->name('produtos.cadastro');

// Rota que direciona para o processamento do formulário de cadastro de produto
Route::post('/produtos/novo', [ProdutoController::class, 'novo'])->name('produto.novo');

// Rota para exibir a tela de alteração de um produto específico
Route::get('/produto/alterar/{id}', [ProdutoController::class, 'telaAlteracao'])->name('produto.alterar');

// Rota para processar a alteração de um produto específico
Route::post('/produto/alterar/{id}', [ProdutoController::class, 'alterar'])->name('produto.alterar');

// Rota para excluir um produto específico
Route::get('/produto/excluir/{id}', [ProdutoController::class, 'excluir'])->name('produto.excluir');

use App\Http\Controllers\VendaController;

// Rota para listar todas as vendas
Route::get('/vendas', [VendaController::class, 'telaCadastro'])->name('vendas.cadastro');

// Rota que direciona para o processamento do formulário de criação de venda
Route::post('/vendas/novo', [VendaController::class, 'novo'])->name('vendas.novo');

Route::get('/vendas/usuario/{id}', [VendaController::class, 'vendaPorUsuario'])->name('venda.usuario');

