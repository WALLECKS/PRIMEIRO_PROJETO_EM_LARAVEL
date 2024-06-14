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
        <h1 align="center"> <font color="white" size="10%"><b> ATUALIZAÇÃO CADASTRAL DE CATEGORIAS DE PRODUTOS </b></font></h1> <!-- TITULO -->
    </div>
<!--================================== ABAIXO OS ERROS DE FORMUALARIOS NAO PREENCHIDOS==============================-->

    @if($errors->any())
    
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    

    @endif
   
        <div  align="center" class="shadow-md ... " ><!-- centraliza formulario -->
            
            <form action="{{route('Cadastro.Update_Category2',$category_model->id)}}" method="post" class="bg-slate-300">
                @csrf
                @method('put')
                <div class="space-y-12"> <!-- espaçamento entre inputs -->
                            <font color="#0c0a09"> <!-- cor do texto-->
                               <font color="red">*</font><b>Nome da Categoria:</b>
                            </font><input type="text" name="name_category" class="border-2 border-rose-500 ..." placeholder="insira seu nome" size="30px" value="{{$category_model->name_category}}">
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
                                                atualizar
                                            </b>
                                        </p>
                                    </font>
                                </button> <br><br>
                </div> <!-- fim do espaçamento entre inputs-->   
           </form><!-- FIM DO FORMULARIO -->
       
        </div><!-- fim da centralizaçao dos inputs-->       
            
</body>
</html>