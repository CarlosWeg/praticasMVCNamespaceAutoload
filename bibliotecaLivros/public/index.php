<?php

    require_once __DIR__ . '/../config/autoload.php';

    use App\Controllers\LivroController;

    //PHP_URL_PAT faz com que apenas a parte do caminho seja extraída, ignorando qualquer query string.
    $sUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $aUri = explode('/',$sUri);

    $oController = new LivroController();

    switch ($aUri[1]){
        case 'livros':
            if (isset($aUri[2])){
                switch ($aUri[2]){
                    case 'cadastrar':
                        $oController->cadastrarLivro();
                        break;
                    
                    case 'listar':
                        $oController->listar();
                        break;
                    default:
                        $oController->listar();
                        break;
                }
            } else {
                $oController->listar();
                break;
            }
        default:
            $oController->listar();
            break;
    }