<?php

    require_once __DIR__ . '/../config/autoload.php';

    use App\Controllers\ContatoController;

    $oContatoController = new ContatoController();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        if (isset($_POST['nome_cadastro'])){
            $sNomeCadastro = trim($_POST['nome_cadastro']);
            $sTelefoneCadastro = trim($_POST['telefone_cadastro']);
            $sEmail = trim($_POST['email_cadastro']);

            $oContatoController->inserirContato($sNomeCadastro,$sTelefoneCadastro,$sEmail);
        }


        if (isset($_POST['nome_busca'])){
            $sNomeBusca = trim($_POST['nome_busca']);

            $aContatosBusca = $oContatoController->buscarContato($sNomeBusca);
        }

    }

    $aContatos = $oContatoController->obterContatos();
    require_once __DIR__ . '/../views/ContatoView.php';