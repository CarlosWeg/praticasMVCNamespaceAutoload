<?php

namespace App\Controllers;

use App\Models\UsuarioModel;


class AutenticadorController{
    private $oUsuarioModel;

    public function cadastrar(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $sNome = $_POST['nome_cadastro'];
            $sEmail = $_POST['email_cadastro'];
            $sSenha = $_POST['senha_cadastro'];

            $this->oUsuarioModel = new UsuarioModel();
            $this->oUsuarioModel->cadastrar($sNome, $sEmail, $sSenha);
            header('Location: index.php?operacao=cadastrar');
            exit;
        }

        require_once __DIR__ . '/../Views/auth/cadastro.php';

    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $sEmail = $_POST['email_login'];
            $sSenha = $_POST['senha_login'];

            $this->oUsuarioModel = new UsuarioModel();
            $aUsuario = $this->oUsuarioModel->encontrarPorEmail($sEmail);

            if ($aUsuario && password_verify($sSenha,$aUsuario['senha'])){
                session_start();
                $_SESSION['usuario'] = $aUsuario['nome'];
                header('Location: index.php?operacao=dashboard');
                exit;
            }
        }

        require_once __DIR__ . '/../Views/auth/login.php';

    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: /../public/index.php');
        exit;
    }
    

}