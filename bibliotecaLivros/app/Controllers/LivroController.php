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

        public function buscarPorId(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $id = $_POST['id_busca'];
                $this->oLivroModel = new LivroModel();
                $this->oLivroModel->buscarPorIdDB($id);
                header('Location: /livros');
                exit;
            }
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
            }
        }

        public function atualizarDisponivel(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $id = $_POST['id_disponivel'];

                $this->oLivroModel = new LivroModel();
                $this->oLivroModel->atualziarDisponivel($id);
                header('Location: /livros');
                exit;
            }
        }

    }