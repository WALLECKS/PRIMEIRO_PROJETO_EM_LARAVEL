<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detalhes</h1>

    <ul>

        <li>Nome do produto: {{$user->name}}</li>
        <li>Descriçao do produto: {{$user->descriçao}}</li>
        <li>Preço do produto: {{$user->preço}}</li>
        <li>id do produto: {{$user->id}}</li>
    </ul>
</body>
</html>