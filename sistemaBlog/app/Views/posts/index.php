<!DOCTYPE html>
<html lang = "pt-BR">

<head>
        
    <meta charset = "UTF-8">
    <title>Blog</title>

</head>

<body>

    <h1>Posts do Blog:</h1>

    <table>

        <th>Titulo</th>
        <th>Conteúdo</th>
        <th>Data Criação</th>

        <?php
            foreach ($aPosts as $post){
                echo '<tr>';
                echo '<td>' . $post['p.titulo'] . '</td>';
                echo '<td>' . $post['p.conteudo'] . '</td>';
                echo '<td>' . $post['p.data_criacao'] . '</td>';
                echo '<td><ul>';
                foreach ($aComentarios as $comentario){
                    echo '<li>'. $comentario['conteudo'] . '</li>';
                }
                echo '</td></ul>';
                echo '</tr>';
            }

        ?>

    </table>

</body>


</html>
