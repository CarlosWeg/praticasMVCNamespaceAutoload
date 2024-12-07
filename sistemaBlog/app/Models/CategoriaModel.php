<?php

namespace App\Models\CategoriaModel;
use Config\DataBase;

class CategoriaModel{
    
    
    public function obterCategoriasBD(){

        $oConexao = DataBase::conectarBD();

        $sSelect = "SELECT *
                      FROM TBCATEGORIAS";
        
        $oResultado = pg_query($oConexao,$sSelect);
        $aData = [];

        while ($aResultado = pg_fetch_assoc($oResultado)){
            $aData[]= $aResultado;
        }

        return $aData;

    }

    public function criarCategoriaBD($sNome){

        $oConexao = DataBase::conectarBD();

        $sInsert = "INSERT INTO TBCATEGORIAS
                           (NOME)
                    VALUES ($1)";

        pg_query_params($oConexao,$sInsert,[$sNome]);

    }

    public function atualizarStatusCategoriaBD($id){

        $oConexao = DataBase::conectarBD();

        $sUpdate = "UPDATE TBCATEGORIAS
                       SET STATUS = NOT STATUS
                     WHERE ID = $1";

        pg_query_params($oConexao,$sUpdate,[$id]);
        
    }

}