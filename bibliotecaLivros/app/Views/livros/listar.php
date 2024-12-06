<!DOCTYPE html>
<html lang = "pt-BR">
<head>
    <meta charset = "UTF-8">
    <title>Listas Livros</title>

</head>

<body>

    <h1>Listagem de livros:<h1>

    <table>

        <tr>

            <th>Identificador</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Disponibilidade</th>
            <th>Ação</th>

        </tr>

        <?php

            foreach ($aLivros as $livro){
                echo '<tr>';
                echo '<td>' . $livro['id'] . '</td>';
                echo '<td>' . $livro['titulo'] . '</td>';
                echo '<td>' . $livro['autor'] . '</td>';
                echo '<td>' . $livro['isbn'] . '</td>';
                echo '<td>' . $livro['disponivel'] . '</td>';
                echo '<td><a href = "index.php?id_disponivel=' . $livro['id'] . '">Alterar disponibilidade</a></td>';
                echo '</tr>';
            }

        ?>

    </table>

    <a href = "livros/cadastrar">Novo Livro</a>


</body>

</html>