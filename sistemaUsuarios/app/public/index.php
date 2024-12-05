<?php

require_once __DIR__ . '/../../config/autoload.php';

use App\Controllers\AutenticadorController;
use App\Controllers\UsuarioController;

if (isset($_GET['operacao'])){
    $operacao = $_GET['operacao'];
} else {
    $operacao = 'login';
}

switch ($operacao) {

    case 'cadastrar':
        (new AutenticadorController())->cadastrar();
        break;

    case 'login':
        (new AutenticadorController())->login();
        break;
    
    case'logout':
        (new AutenticadorController())->logout();
        break;

    case 'dashboard':
        (new UsuarioController())->dashboard();
        break;
    
    default:
        echo($operacao);
        echo '<br>';
        echo 'Página acima não encontrada';
        break;

}