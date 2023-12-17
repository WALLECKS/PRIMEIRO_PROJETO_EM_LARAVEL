<?php

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

// ROTA DE REGISTRO DE CLIENTES
Route::get('/resgistro',[ControllerTeste::class, 'registro'])->name('registro.registro');
// PAGINA INICIAL
Route::get('/', function () {
    return view('welcome');
});
// ROTA PARA DELETAR UM REGISTRO
Route::delete('/delete/{id}',[ControllerTeste::class,'delete'])->name('delete.delete');
// ROTA DA TELA DE CADASTRO DE CLIENTES
Route::get('/cadastro_clientes',[ControllerTeste::class, 'Formulario_Cadastro_Clientes'])->name('cadastro_clientes.Formulario_Cadastro_Clientes');

// Rotas do botao de cadastro da view cadastro.blade onde cadastra as informaçoes
Route::post('/cadastrar',[ControllerTeste::class, 'cadastro'])->name('cadastro.cadastro');