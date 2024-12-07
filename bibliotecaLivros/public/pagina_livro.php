<?php

    require_once __DIR__ . '/../config/autoload.php';

    use App\Controllers\LivroController;

    $oController = new LivroController();

    if (isset($_GET['acao'])){
        $acao = $_GET['acao'];
    } else{
        $acao = '';
    }

    switch ($acao) {
        case 'listar':
            $oController->listarLivros();
            break;
        
        case 'cadastrar':
            $oController->cadastrarLivro();
            break;

        case 'empresta':
            $oController->emprestaLivro();
            break;

        default:
            $oController->listarLivros();
            break;
    }