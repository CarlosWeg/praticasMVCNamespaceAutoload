<?php

namespace App\Models\PostModel;
use Config\DataBase;

class PostModel{

    public function obterPostsBD(){
        $oConexao = DataBase::conectarBD();

        $sSelect = "SELECT P.ID,
                           P.TITULO,
	                       P.CONTEUDO,
	                       P.CATEGORIA_ID,
	                       C.NOME,
	                       P.DATA_CRIACAO
                      FROM TBPOSTS P
                      JOIN TBCATEGORIAS C ON P.CATEGORIA_ID = C.ID";
        
        $oResultado = pg_query($sSelect);
        $aData = [];

        while ($aResultado = pg_fetch_assoc($oResultado)){
            $aData[] = $aResultado;
        }

        return $aData;
    }

    public function criarPostBD($sTitulo,$sConteudo,$id){
        $oConexao = DataBase::conectarBD();

        $sInsert = "INSERT INTO TBPOSTS
                           (TITULO,CONTEUDO,CATEGORIA_ID)
                           VALUES($1,$2,$3)";
        
        pg_query_params($oConexao,$sInsert,[$id]);
    }

    public function atualizarStatusPostBD($id){
        $oConexao = DataBase::conectarBD();

        $sUpdate = "UPDATE TBPOSTS
                       SET STATUS = NOT STATUS
                     WHERE ID = $1";
        
        pg_query_params($oConexao,$sUpdate,[$id]);
    }

}