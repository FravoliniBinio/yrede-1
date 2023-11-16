<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial - YRede</title>
</head>
<body>

    <div>
        <a href="/cadastra-usuario">Cria Conta</a>
        <br>
        <a href="/login">Login</a>
    </div>

    <div>
        <a href="/cria-post">Nova Postagem</a>
</div>

<h1>Posts:</h1>
@foreach ($posts as $post)
    <div>
        <div>
            Postagem - {{$post->id}}
        <div>
        {{$post->mensagem}}
    <div>
    <hr>
@endforeach
    
</body>
</html>
