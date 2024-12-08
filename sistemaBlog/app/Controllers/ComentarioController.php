<?php

namespace App\Controllers\ComentarioController;
use App\Models\ComentarioModel;

class ComentarioController{
    private $oComenatarioModel;

    public function __construct(){
        $this->oComenatarioModel = new ComentarioModel();
    }

    public function obterComentarios(){
        $this ->$oComenatarioModel->obterComentariosBD();
    }

    public function criarComentario(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $iPostId = $_POST['id_post_criar_comentario'];
            $sConteudo = $_POST['conteudo_criar_comentario'];

            $this->$oComenatarioModel->criarComentarioBD($sTitulo,$sConteudo,$iIdCategoria);
            header('Location: index.php');
        }
        
    }

    public function atualizarStatusComentario(){
        if (isset($_GET['id_atualizar_status_comentario'])){
            $id = $_GET['id_atualizar_status_comentario'];
            $this->$oComenatarioModel->atualizarStatus($id);
        }

        header('Location: index.php');
    }



}