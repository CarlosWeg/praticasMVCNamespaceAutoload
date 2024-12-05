<!DOCTYPE html>
<html lang = "pt-BR">

<head>

    <meta charset = "UTF-8">
    <title>Cadastrar</title>
    
</head>

<body>

    <h1>Cadastro</h1>

    <form method = "POST">

        <label for = "nome_cadastro">Nome:</label>
        <input type = "text" name = "nome_cadastro" required>

        <label for = "email_cadastro">E-mail:</label>
        <input type = "email" name = "email_cadastro" required>

        <label for = "senha_cadastro">Senha:</label>
        <input type = "password" name = "senha_cadastro" required>

        <input type = "submit" value = "Cadastrar!">
    
    </form>

    <a href = "index.php?operacao=login">Já tem uma conta? Faça login!</a>

</body>

</html>