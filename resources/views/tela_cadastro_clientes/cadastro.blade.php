<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> 


    <title>CADASTRO DE CLIENTES</title>
</head>
<body class=""> <!-- cor do body-->
    <div class="shadow-md ... bg-slate-600"> <!-- cor do titulo-->
        <h1 align="center"> <font color="white" size="10%"><b> CADASTRO DE CLIENTES </b></font></h1> <!-- TITULO -->
    </div>
<!--================================== ABAIXO OS ERROS DE FORMUALARIOS ==============================-->

    @if($errors->any())
    
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    

    @endif
   
        <div  align="center" class="shadow-md ... " ><!-- centraliza formulario -->
            
            <form action="{{route('cadastro.cadastro')}}" method="post" class="bg-slate-300">
                @csrf
                
                <div class="space-y-12"> <!-- espaçamento entre inputs -->
                            <font color="#0c0a09"> <!-- cor do texto-->
                               <font color="red">*</font><b>NOME:</b>
                            </font><input type="text" name="name" class="border-2 border-rose-500 ..." placeholder="insira seu nome" size="30px">
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>SOBRENOME:</b>
                            </font><input type="text" name="sobrenome" class="border-2 border-rose-500 ..." placeholder="insira o seu sobrenome" size="25px"> 
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>IDADE:</b>
                            </font><input type="number" name="idade" placeholder="insira o sua idade" class="border-2 border-rose-500 ..." size="15px"> 
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>CPF:</b>
                            </font><input type="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}$" name="cpf" placeholder="___.___.___-__"  class="border-2 border-rose-500 ..." title="informe os pontos e o traço a cada valor"> 
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>DATA:</b>
                            </font><input type="date" name="created_at" placeholder=" informe a data" class="border-2 border-rose-500 ..."> 
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>HORA:</b>
                            </font><input type="datetime-local" name="updated_at" placeholder=" informe a HORA" class="border-2 border-rose-500 ..."> <br>
                            
                         
                                <button type="submit" class="bg-sky-500/100 ... " >
                                    <font color="white"> <!-- cor do texto-->
                                        <p class="font-mono ... border-2"> 
                                            <b> 
                                                cadastrar
                                            </b>
                                        </p>
                                    </font>
                                </button> <br><br>
                </div> <!-- fim do espaçamento entre inputs-->   
           </form><!-- FIM DO FORMULARIO -->
       
        </div><!-- fim da centralizaçao dos inputs-->       
            
</body>
</html>