<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerTeste;
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
//==================================== ABAIXO AS ROTAS DE CADASTROS, ATUALIZAÇÃO, DELETE E DETALHES DO PRODUTOS ============================================
// ROTA DE UPDATE DE INFORMAÇOES DO BANCO DE DADOS
Route::put('/update/{id}',[ControllerTeste::class, 'update'])->name('update.update');

// ROTA DE DERECIONAMENTO PARA ATUALIZAÇÃO DOS INFORMAÇOES CADASTRADAS
Route::get('/atualizar/{id}/atualizar',[ControllerTeste::class, 'atualizar'])->name('atualizar.atualizar');

// ROTA PARA DIRECIONAMENTO DOS DETALHES DOS CLIENTES
Route::get('/detalhes/{id}',[ControllerTeste::class, 'detalhes'])->name('detalhes.detalhes');
 
// ROTA DE REGISTRO DE PRODUTOS
Route::get('/resgistro',[ControllerTeste::class, 'registro'])->name('registro.registro');

// PAGINA INICIAL
Route::get('/', function () {
    return view('welcome');
});

// ROTA PARA DELETAR UM REGISTRO
Route::delete('/delete/{id}/delete',[ControllerTeste::class,'delete'])->name('delete.delete');

// ROTA DA TELA DE CADASTRO DE CLIENTES
Route::get('/cadastro_clientes',[ControllerTeste::class, 'Formulario_Cadastro_Clientes'])->name('cadastro_clientes.Formulario_Cadastro_Clientes');

// Rotas do botao de cadastro da view cadastro.blade onde cadastra as informaçoes
Route::post('/cadastrar',[ControllerTeste::class, 'cadastro'])->name('cadastro.cadastro');


//==================================== ABAIXO AS ROTAS DE CADASTROS, ATUALIZAÇÃO, DELETE E DETALHES DA CATEGORIA DE PRODUTOS================================


// ROTA DE DIRECIONAMENTO PARA TELA DE CADASTRO DE CATEGORIAS DE PRODUTOS
Route::get('/Cadastro_Categoria',[ControllerTeste::class, 'Cadastro_Categoria'])->name('Cadastro_Categoria.Cadastro_Categoria');

//ROTA DE CADASTRO DAS INFORMAÇOES DA CATEGORIA DE PRODUTOS
Route::post('/Cadastro',[ControllerTeste::class, 'Create_Category'])->name('Cadastro.Create_Category');

//ROTAS DE LISTAGEM DE CATEGORIAS CADASTRADAS NO BANCO
Route::get('/listar_categorias',[ControllerTeste::class, 'Categoria_Product'])->name('listar_categorias.Categoria_Product');

//ROTA QUE DIRECIONA PARA O CONTROLLER QUE DELETA REGISTROS DE CATEGORIAS DE PRODUTOS
Route::delete('/delete_category/{id}/delete_category', [ControllerTeste::class, 'Delete_Category'])->name('delete_category.Delete_Category');

//ROTA QUE DIRECIONA PARA VER OS DETALHES DAS CATEGORIAS DE PRODUTOS CADASTRADOS
Route::get('/Detalhes_Category/{id}/Detalhes_Category',[ControllerTeste::class, 'Detalhes_Category'])->name('Detalhes_Category.Detalhes_Category');
// ROTA DE ATUALIZAÇÃO DE INFORMAÇÕES DA CATEGORIA DE PRODUTOS
Route::put('/Cadastro/{id}',[ControllerTeste::class, 'Update_Category2'])->name('Cadastro.Update_Category2');

// ROTA DE DIRECIONAMENTO PARA ATUALIZAÇÃO DE INFORMAÇÕES DA CATEGORIA DE PRODUTOS
Route::get('/Cadastro/{id}/Cadastro',[ControllerTeste::class, 'Update_Category'])->name('Cadastro.Update_Category');

// ROTA DE ATUALIZAÇÃO DE INFORMAÇÕES DA CATEGORIA DE PRODUTOS
Route::put('/Cadastro/{id}',[ControllerTeste::class, 'Update_Category2'])->name('Cadastro.Update_Category2');
