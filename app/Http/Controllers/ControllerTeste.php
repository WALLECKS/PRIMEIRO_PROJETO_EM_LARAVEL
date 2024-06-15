<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateControllerTeste;
use App\Http\Requests\ValidaçaoCadastroCategorias;
use App\Models\CategoryModel;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerTeste extends Controller
{
/*
ABAIXO AS ROTAS DE CADASTROS, LEITURA, ATUALIZAÇÃO E DELETE DOS PRODUTOS 
*/
// abaixo a funçao responsavel por encaminhar a view de registros de informaçoes
    public function registro(User $datas)
    {
    
        $datas= $datas->all();
        return view('lista_contatos.registros',compact('datas'));
    }

// abaixo segue a rota responsavel por cadastras novas informaçoes no banco de dados
    public function cadastro(ValidateControllerTeste $request) // injeçao de dependencias       
    { 

       $user= $request->all(); // recupera as informaçoes 
       
       User::create($user)->only(['name','descriçao','preço','categoria']); // cria uma nova informaçao no banco de dados)
       
       return view('welcome');
    }
// abaixo segue a funçao responsarvel por encaminhar ate a rota do formulario para cadastro
    public function Formulario_Cadastro_Clientes()
    {
        return view('/telas_cadastros.cadastro_product');
    }
// abaixo a rota que deleta um registro e retorna para a pagina inicial
    public function delete(User $datas, int $id)
    {  
        $datas= $datas->all();
        if(!$registro = User::where('id',$id)->first())
        {
            return redirect()->view('lista_contatos.registros');
        }
        $registro->delete();
        return redirect()->route('registro.registro');
    }
// abaixo o controller que retorna os detalhes dos registros cadastrados  
    public function detalhes( string $id)
    {
        if(!$user = User::find($id))
        {
            return redirect()->view('lista_contatos.registros');
        }
        
        return view('./lista_contatos.DetalhesProduct',compact('user'));
    }
//controller de direcionamento para o formulario de atualização das informaçoes cadastradas no banco de dados
    public function atualizar(string $id)
    {
        $data = User::find($id);
        return view('/telas_cadastros.updateproduct', compact('data'));
    }
//controller de atualização de informaçoes dos produtos cadastrados
    public function update(ValidateControllerTeste $request, string $id)
    {
        if(!$datas=User::find($id)){
            return redirect()->route('registro.registro');
        }
        $datas->update($request->only(['name','descriçao','preço']));
        return redirect()->route('registro.registro');
    }    
/*
 ABAIXO AS ROTAS DE CADASTROS, LEITURA, ATUALIZAÇÃO E DELETE DA CATEGORIA DOS PRODUTOS
*/
// controller de direcionamento para view de cadastro de categorias de produtos
public function Cadastro_Categoria()
{
    return view('/telas_cadastros.cadastro_category');
}

// controller de cadastro de categorias de produtos
public function Create_Category(ValidaçaoCadastroCategorias $request) {
    
       $category_models= $request->all(); // recupera as informaçoes 
       
       CategoryModel::create($category_models)->only(['name_category']); // cria uma nova informaçao no banco de dados
       
       return view('welcome');
}  
// o controller abaixo retorna a uma lista de categorias de produtos cadastrados no banco de dados  
public function Categoria_Product(CategoryModel $category_model)
    {
        $category_model = $category_model->all();
        
        return view('./lista_contatos.registros_categorias', compact('category_model'));   
    }

// o controller abaixo faz a exclusão dos registros de categorias de produtos e retorna para a pagina de listagem de categorias
public function Delete_Category(CategoryModel $category_model, int $id)
    {  
        $category_model= $category_model->all();
        if(!$category_model = CategoryModel::where('id',$id)->first())
        {
            return redirect()->route('listar_categorias.Categoria_Product');
        }
        $category_model->delete();
        return redirect()->route('listar_categorias.Categoria_Product');
    }

    // abaixo o controller que retorna os detalhes dos registros cadastrados  
public function Detalhes_Category( string $id)
{
    if(!$category_model = CategoryModel::where('id',$id)->first())
    {
        return redirect()->route('listar_categorias.Categoria_Product');
    }
    
    return view('/lista_contatos.Detalhes_Category', compact('category_model'));
}

//controller que retorna a view para atualização de informações da categoria de produtos
public function Update_Category(string $id)
    {
        $category_model = CategoryModel::find($id);
        return view('/telas_cadastros.updatecategory', compact('category_model'));
    }    

    //controller de atualização de informaçoes dos produtos cadastrados
public function Update_Category2(ValidaçaoCadastroCategorias $request, string $id)
{
    if(!$category_model=CategoryModel::find($id))
    {
        return redirect()->route('listar_categorias.Categoria_Product');
    }
    $category_model->update($request->all());
    
    return redirect()->route('listar_categorias.Categoria_Product');
}
}
