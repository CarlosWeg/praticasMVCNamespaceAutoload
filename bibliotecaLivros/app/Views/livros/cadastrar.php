<!DOCTYPE html>
<html lang = "pt-BR">
<head>
    <meta charset = "UTF-8">
    <title>Cadastrar Livro</title>
</head>

<body>

    <fieldset>

        <legend>Cadastrar livro</legend>

        <form method = "POST">

            <label for = "titulo_cadastro">Título:</label>
            <input type = "text" name = "titulo_cadastro" required>

            <label for = "autor_cadastro">Autor:</label>
            <input type = "text" name = "autor_cadastro" required>

            <label for = "isbn_cadastro">ISBN:</label>
            <input type = "text" name = "isbn_cadastro" required>

            <input type = "submit" value = "Cadastrar!">

        </form>

    </fieldset>

    <a href = "/livros/lista">Verificar livros</a>

</body>



</html>