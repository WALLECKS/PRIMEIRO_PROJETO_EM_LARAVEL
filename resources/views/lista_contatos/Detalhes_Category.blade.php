<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--
passando a variavel para visualização
de informações dentro de uma lista.
-->
<h1>Detalhes da Categoria de Produtos</h1>
    <ul>
        <li>Nome do produto: {{$category_model->name_category}}</li>   
        <li>id do produto: {{$category_model->id}}</li>
    </ul>
</body>
</html>