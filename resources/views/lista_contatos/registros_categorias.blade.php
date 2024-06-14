<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Lista de Categorias</title>
</head>
<!--========================================= CONTEUDO ====================================================-->
<body class="bg-slate-100">
    <div class="shadow-md ... bg-slate-600"> <!-- cor do titulo-->
        <h1 align="center"> <font size="10%" color="white" ><b> Lista de Categorias Cadastrados</b></font></h1> <!-- TITULO -->
    </div><br>
<!----------------------------------------------------------------------------------------------------------------->
<!--                    ABAIXO A LISTAGEM DE INFORMAÇOES DENTRO DE UMA TABELA
                       ATRIBUINDO ALGUMAS CLASSES DO TAILWINDCSS 
-->
<div class="shadow-2xl ..."> <!-- ADICIONA UMA SOMBRA -->
    <table class="border-separate border-spacing-2 border border-slate-500 ... border-2 border-sky-500" CELLSPACING="4" WIDTH="700" align="center" HEIGHT="20%"> <!--aplicando uma cor, espaçamento entre celulas, altura e largura da tabela-->
        <thead class="bg-slate-500">
            <tr>
                <th class="border-separate border-spacing-2 border border-slate-500 ..."> <font color="white"><b> Nome da Categoria </b></font></th>
                  
            </tr> 
        </thead>     
        <tbody class="bg-slate-300">
<!--
    passando a variavel $category_models do controller para visualizaçao na view
-->
<form action="{{route('Cadastro_Categoria.Cadastro_Categoria')}}" method="GET">
    <button type="submit"> cadastrar mais categorias </button>
</form>         
@foreach ($category_model as $data)

    <td class="border border-slate-700 ... bg-slate-300">
        <div style="text-align:center">
        {{$data->name_category}}
        </div>
    </td>



<tbody>
    <td>
        <form action="{{route('delete_category.Delete_Category', $data->id)}}" method="post"> 
            @method('delete')
            @csrf
             <button type="submit" class="shadow-2xl ... outline outline-offset-2 outline-red-800 px-3 ..." title="click 2 vezes para excluir o registro">
                <font color="#b91c1c">
                    delete
                </font>
                
             </button>
         </form>  <br> 
        <form action="{{route('Detalhes_Category.Detalhes_Category', $data->id)}}" method="get"> 
            @csrf
             <button type="submit" class="shadow-2xl ... outline outline-offset-2 outline-green-800 px-3 ..." title="click 2 vezes para excluir o registro">
                <font color="#0be012">
                    detalhes
                </font>
                
             </button>
        </form> <br>
        <form action="{{route('Cadastro.Update_Category', $data->id)}}" method="get"> 
            @csrf
             <button type="submit" class="shadow-2xl ... outline outline-offset-2 outline-blue-800 px-3 ..." title="click 1 vez para atualizar o registro">
                <font color="#100dbd">
                    atualizar
                </font>
                
             </button>
         </form>             
     </td>
     
</tbody>

</tbody>       
@endforeach   
    </table><br> 


</div>

</body>
</html>