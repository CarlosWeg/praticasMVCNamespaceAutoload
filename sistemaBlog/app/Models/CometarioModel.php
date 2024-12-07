<?php

namespace App\Models\ComentarioModel;

class ComentarioModel{

    public function obterComentarios($id){
        $oConexao = DataBase::conectarBD();

        $sSelect = "SELECT *
                      FROM TBCOMENTARIOS
                     WHERE POST_ID = $1";
        
        $oResultado = pg_query_params($oConexao,$sSelect,[$id]);
        $aData = [];

        while ($aResultado = pg_fetch_assoc($oResultado)){
            $aData[] = $aResultado;
        }

        return $aData;

    }

    public function CriarComentario($iPostId,$sConteudo){
        $oConexao = DataBase::conectarBD();

        $sInsert = "INSERT INTO TBCOMENTARIOS
                           (POST_ID,CONTEUDO)
                    VALUES ($1,$2)";

        pg_query_params($oConexao, $sInsert, [$iPostId,$sConteudo]);

    }

    public function atualizarStatusComentario($id){
        $oConexao = DataBase::conectarBD();

        $sUpdate = "UPDATE TBCOMENTARIOS
                      SET STATUS = NOT STATUS
                     WHERE ID = $1";
        
        pg_query_params($oConexao, $sUpdate, [$id]);
        
    }


}