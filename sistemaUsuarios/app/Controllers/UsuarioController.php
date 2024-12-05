<?php

namespace App\Controllers;

class UsuarioController{

    public function dashboard(){

        session_start();

        if(!isset($_SESSION['usuario'])){
            header('Location: /login');
            exit;
        }

        require_once __DIR__ . '/../Views/usuario/dashboard.php';

    }

}
    