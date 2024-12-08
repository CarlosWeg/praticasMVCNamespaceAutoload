<?php

namespace App\Controllers\PostController;
use App\Models\PostModel;

class PostController{
    private $oPostModel;

    public function __construct(){
        $this->oPostModel = new PostModel();
    }

    public function obterPosts(){
        $this ->$oPostModel->obterPostsBD();
    }

    public function criarPost(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $sTitulo = $_POST['titulo_criar_post'];
            $sConteudo = $_POST['conteudo_criar_post'];
            $iIdCategoria = $_POST['id_categoria_criar_post'];

            $this->$oPostModel->criarPostBD($sTitulo,$sConteudo,$iIdCategoria);
            header('Location: index.php');
        }
        
    }

    public function atualizarStatusPost(){
        if (isset($_GET['id_atualizar_status_post'])){
            $id = $_GET['id_atualizar_status_post'];
            $this->$oPostModel->atualizarStatus($id);
        }

        header('Location: index.php');
    }



}