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
        <h1 align="center"> <font color="white" size="10%"><b> ATUALIZAR INFORMAÇOES </b></font></h1> <!-- TITULO -->
    </div>
<!--
    ABAIXO OS ERROS DE FORMUALARIOS NAO PREENCHIDOS
-->
    @if($errors->any())
    
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    @endif()
<!--
     FORMULARIO DE ATUALIZAÇAO
-->
        <div  align="center" class="shadow-md ... " ><!-- centraliza formulario -->
            
            <form action="{{route('update.update', $data->id)}}" method="post" class="bg-slate-300">
                @csrf
                @method('put')
                <div class="space-y-12"> <!-- espaçamento entre inputs -->
                            
                    '       <font color="#0c0a09"> <!-- cor do texto-->
                               <font color="red">*</font><b>Nome do produto:</b>
                            </font><input type="text" name="name" class="border-2 border-rose-500 ..." placeholder="informe o nome do produto" size="30px" value="{{$data->name}}">
                            
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>Descrição:</b>
                            </font><input type="text" name="descriçao" class="border-2 border-rose-500 ..." placeholder="descrição do produto" size="25px" value="{{$data->descriçao}}"> 
                            
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>Preço:</b>
                            </font><input type="number" name="preço" placeholder="valor do produto" class="border-2 border-rose-500 ..." size="15px" value="{{$data->preço}}"> 
                           
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>Data de Criaçao:</b>
                            </font><input type="date" name="created_at" placeholder=" data de criação" class="border-2 border-rose-500 ..." value="{{$data->created_at}}"> 
                            
                            <font color="#0c0a09"> <!-- cor do texto-->
                                <font color="red">*</font><b>Data/Hora de criação:</b>
                            </font><input type="datetime-local" name="updated_at" placeholder=" data/hora" class="border-2 border-rose-500 ..."> <br>
                            
                         
                                <button type="submit" class="bg-sky-500/100 ... " >
                                    <font color="white"> <!-- cor do texto-->
                                        <p class="font-mono ... border-2"> 
                                            <b> 
                                                atualizar
                                            </b>
                                        </p>
                                    </font>
                                </button> <br>
                </div> <!-- fim do espaçamento entre inputs-->
<!--============================================================== Texto Explicativo ===============================================================-->               
                <h4 ><font color="red"><b>*</b></font> informe todos os valores dos campos abaixo
                    <ol>
                        <li>nome do produto</li>
                        <li>descrição</li>
                        <li>preço</li>
                        <li>categoria do produto</li>
                        <li>data de criação</li>
                        <li>data/hora de criação</li>
                    </ol>
                </h4>
            <br>   
           </form><!-- FIM DO FORMULARIO -->
       
        </div><!-- fim da centralizaçao dos inputs-->       
            
</body>
</html>