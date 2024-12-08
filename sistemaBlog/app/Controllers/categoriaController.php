<?php

namespace App\Controllers\CategoriaController;
use App\Models\CategoriaModel;

class CategoriaController{
    private $oCategoriaModel;

    public function __construct(){
        $this->oCategoriaModel = new ComentarioModel();
    }

    public function obterCategorias(){
        $this ->$oCategoriaModel->obterCategoriasBD();
    }

    public function criarCategoria(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $sNome = $_POST['nome_criar_categoria'];

            $this->$oCategoriaModel->criarCategoriaBD($sTitulo,$sConteudo,$iIdCategoria);
            header('Location: index.php');
        }
        
    }

    public function atualizarStatusCategoria(){
        if (isset($_GET['id_atualizar_status_categoria'])){
            $id = $_GET['id_atualizar_status_categoria'];
            $this->$oCategoriaModel->atualizarStatusCategoriaBD($id);
        }

        header('Location: index.php');
    }

}