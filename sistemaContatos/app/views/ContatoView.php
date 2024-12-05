<!DOCTYPE HTML>
<html lang = "pt-BR">

<head>

    <meta charset = "UTF-8">
    <title>Gerenciador de Contatos</title>
    <style>
        h1,h2,th,td{
            padding: 10px;
        }

        table,th,td,tr{
            border: solid 1px grey;
        }
    </style>

</head>

<body>

    <h1>Sistema de Contatos</h1>

    <section id = "cadastro-contatos">

        <h2>Cadastro de contatos:</h2>

        <form method = "POST" action = "../public/index.php">

            <label for = "nome_cadastro">Informe o nome:</label>
            <input type = "text" name = "nome_cadastro" id = "nome_cadastro" required>

            <label for = "email_cadastro">Informe o e-mail:</label>
            <input type = "email" name = "email_cadastro" id = "email_cadastro">

            <label for = "telefone_cadastro">Informe o telefone:</label>
            <input type = "tel" name = "telefone_cadastro" id = "telefone_cadastro">

            <input type = "submit" value = "Enviar!">

        </form>

    </section>

    <section id = "lista-contatos-busca">

        <h2>Buscar contato pelo nome:</h2>

        <form method = "POST" action = "../public/index.php">

            <label for = "nome_busca">Informe o nome a ser buscado no banco de dados:</label>
            <input type = "texto" id = "nome_busca" name = "nome_busca" required>

            <input type = "submit" value = "Buscar!">

        </form>

        <h2>Lista de contatos encontrados pela busca:</h2>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Data de Criação</th>
                    <th>Data de Atualização</th>

                <tr>

                <?php

                    if (!empty($aContatosBusca)){
                        foreach($aContatosBusca as $contato){
                            echo '<tr>';
                            echo '<td>' . $contato['id'] . '</td>';
                            echo '<td>' . $contato['nome'] . '</td>';
                            echo '<td>' . $contato['email'] . '</td>';
                            echo '<td>' . $contato['telefone'] . '</td>';
                            echo '<td>' . $contato['datacriacao'] . '</td>';
                            echo '<td>' . $contato['dataatualizacao'] . '</td>';
                            echo '</tr>';
                        }
                    }

                ?>

            </table>

    </section>
    
    <section id = "lista-contatos">

        <h2>Lista de contatos:</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Data de Criação</th>
                <th>Data de Atualização</th>

            <tr>

            <?php

                if(!empty($aContatos)){

                    foreach($aContatos as $contato){
                        echo '<tr>';
                        echo '<td>' . $contato['id'] . '</td>';
                        echo '<td>' . $contato['nome'] . '</td>';
                        echo '<td>' . $contato['email'] . '</td>';
                        echo '<td>' . $contato['telefone'] . '</td>';
                        echo '<td>' . $contato['datacriacao'] . '</td>';
                        echo '<td>' . $contato['dataatualizacao'] . '</td>';
                        echo '</tr>';
                    }

                }

            ?>

        </table>

    </section>

</body>

</html>