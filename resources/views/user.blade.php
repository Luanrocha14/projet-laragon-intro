<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuário</title>
</head>
<body>
    <h1>Bem-vindo, {{ $user->name }}!</h1>
    <p>Email: {{ $user->email }}</p>
    <a href="/">Voltar</a>
</body>
</html>
