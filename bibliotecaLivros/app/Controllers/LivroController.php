<?php

    namespace App\Controllers;
    use App\Models\LivroModel;

    class LivroController{
        private $oLivroModel;

        public function listar(){
            $this->oLivroModel = new LivroModel();
            $aLivros = $this->oLivroModel->obterLivrosBD();
            require_once __DIR__ . '/../Views/livros/listar.php';
        }

        public function cadastrarLivro(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                $sTitulo = $_POST['titulo_cadastro'];
                $sAutor = $_POST['autor_cadastro'];
                $sIsbn = $_POST['isbn_cadastro'];

                $this->oLivroModel = new LivroModel();
                $this->oLivroModel->cadastrarLivroDB($sTitulo,$sAutor,$sIsbn);
                header('Location: /livros');
                exit;
            } else {
                require_once __DIR__ . '/../Views/livros/cadastrar.php';
            }
        }

        public function atualizarDisponivel(){
            if (isset($_GET['id_disponivel'])){
                $id = $_GET['id_disponivel'];

                $this->oLivroModel = new LivroModel();
                $this->oLivroModel->atualziarDisponivel($id);
                header('Location: /livros');
                exit;
            } else {
                require_once __DIR__ . '/..Views/livros/atualizar.php';
            }
        }

    }