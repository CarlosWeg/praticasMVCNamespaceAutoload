<!DOCTYPE html>
<html lang = "pt-BR">
<head>
    <meta charset = "UTF-8">
    <title>Listar Livros</title>
    <link rel = "stylesheet" href = "styles.css">
</head>

<body>

    <h1>Listagem de livros:</h1>

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
                echo '<td>' . ($livro['disponivel'] =='t'? 'Disponível' : 'Emprestado') . '</td>';
                echo '<td><a href="pagina_livro.php?acao=empresta&id_disponivel=' . $livro['id'] . '">Alterar disponibilidade</a></td>';
                echo '</tr>';
            }

        ?>

    </table>

    <a href="pagina_livro.php?acao=cadastrar">CADASTRAR</a>


</body>

</html>