<?php

    namespace App\Controllers;
    use App\Models\LivroModel;

    class LivroController{
        private $oLivroModel;

        public function listarLivros(){
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
                header('Location: pagina_livro.php?acao=cadastrar');
                exit;
            } else {
                require_once __DIR__ . '/../Views/livros/cadastrar.php';
            }
        }

        public function emprestaLivro(){
            if (isset($_GET['id_disponivel'])){
                $id = $_GET['id_disponivel'];

                $this->oLivroModel = new LivroModel();
                $this->oLivroModel->atualizarDisponivelDB($id);
                header('Location: pagina_livro.php?acao=listar');
                exit;
            }

        }

    }