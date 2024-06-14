<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> 


    <title>CADASTRO DE CATEGORIAS DE PRODUTOS</title>
</head>
<body class=""> <!-- cor do body-->
    <div class="shadow-md ... bg-slate-600"> <!-- cor do titulo-->
        <h1 align="center"> <font color="white" size="10%"><b> CADASTRO DE CATEGORIAS DE PRODUTOS </b></font></h1> <!-- TITULO -->
    </div>
<!--================================== ABAIXO OS ERROS DE FORMUALARIOS NAO PREENCHIDOS==============================-->

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif
   
        <div  align="center" class="shadow-md ... " ><!-- centraliza formulario -->
            
            <form action="{{route('Cadastro.Create_Category')}}" method="post" class="bg-slate-300">
                @csrf
                @method('post')
                <div class="space-y-12"> <!-- espaçamento entre inputs -->
                            <font color="#0c0a09"> <!-- cor do texto-->
                               <font color="red">*</font><b>Nome da Categoria:</b>
                            </font><input type="text" name="categoria" class="border-2 border-rose-500 ..." placeholder="insira seu nome" size="30px">
                            <font color="#0c0a09"> <!-- cor do texto-->
                            
                                <font color="red">*</font><b>Data de Criação:</b>
                            </font><input type="date" name="updated_at" placeholder=" informe a data" class="border-2 border-rose-500 ..."> 
                           
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>DATA/HORA de Criação:</b>
                            </font><input type="datetime-local" name="created_at    " placeholder=" informe a HORA" class="border-2 border-rose-500 ..."> <br>
                            
                         
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