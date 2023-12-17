<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateControllerTeste;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerTeste extends Controller
{
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
       User::create($user); // cria uma nova informaçao no banco de dados)
       
       return view('welcome');
    }
// abaixo segue a funçao responsarvel por encaminhar ate a rota do formulario para cadastro
    public function Formulario_Cadastro_Clientes()
    {
        return view('/tela_cadastro_clientes.cadastro');
    }
// abaixo a rota que deleta um registro
    public function delete(User $datas,int $id)
    {  
        $datas= $datas->all();
        if(!$registro = User::where('id',$id)->first())
        {
            return redirect()->route('registro.registro');
        }
        $registro->delete();
        return view('lista_contatos.registros',compact('datas'));
    }

}
