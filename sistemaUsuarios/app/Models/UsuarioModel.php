<?php

namespace App\Models;

class UsuarioModel{
    private $oDataBase;

    public function __construct(){
        $this->oDataBase = require_once __DIR__ . '/../../config/dataBase.php';
    }

    public function cadastrar($sNome,$sEmail,$sSenha){

        $sSenhaHash = password_hash($sSenha, PASSWORD_DEFAULT);
        $sInsert = "INSERT INTO TBUSUARIOS
	                       (nome,email,senha)
                    VALUES ($1,$2,$3)";

        pg_query_params($this->oDataBase,$sInsert,[$sNome,$sEmail,$sSenhaHash]);
        
    }

    public function encontrarPorEmail($sEmail){
        $sSelect = "SELECT *
                      FROM TBUSUARIOS
                     WHERE EMAIL = $1";
        
        $oResultado = pg_query_params($this->oDataBase,$sSelect,[$sEmail]);

        return pg_fetch_assoc($oResultado);
   
    }

}