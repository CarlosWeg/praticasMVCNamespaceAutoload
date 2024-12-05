<!DOCTYPE html>
<html lang = "pt-BR">

<head>

    <meta charset = "UTF-8">
    <title>Logar</title>
    
</head>

<body>

    <h1>Login</h1>

    <form method = "POST">

        <label for = "email_login">E-mail:</label>
        <input type = "email" name = "email_login" required>

        <label for = "senha_login">Senha:</label>
        <input type = "password" name = "senha_login" required>

        <input type = "submit" value = "Entrar!">

    </form>

    <a href = "index.php?operacao=cadastrar">Não tem uma conta? Cadastre-se!</a>
    
</body>

</html>