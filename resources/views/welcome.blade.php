<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pagina Inicial</title>
</head>

    <body class="bg-slate-200">
<!--
    TITLE
-->
        <div class="bg-slate-300 ">
            <h1 class="text-3xl" align="center"><font face="arial"> <b class="text-slate-400">PAGINA INICIAL</b> </font></h1>
        </div>
<!--
    ROUTES
-->
        <div class="flex flex justify-around mt-1 flex space-x-4 ...">
            <nav>
                <table cellpadding="20%">
                        <tr >
                            <th><a class="no-underline hover:underline ... " href="{{route('cadastro_clientes.Formulario_Cadastro_Clientes')}}"><b>Cadastro de Clientes</b></a></th>
                            <th><a class="no-underline hover:underline ..." href="{{route('registro.registro')}}"><b> Registros </b></a></th>
                        </tr>       
                </table>
        </nav>

        </div>
    </body>
</html>