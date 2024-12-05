<?php

    namespace App\Models;

    use App\Models\DataBaseModel;

    class ContatoModel{
        private $oDataBase;

        public function __construct(){
            $this->oDataBase = new DataBaseModel;
        }

        public function obterContatosBD(){

            $sQuery = "SELECT ID,
                              NOME,
                              EMAIL,
                              TELEFONE,
                              DATACRIACAO,
                              DATAATUALIZACAO
                        FROM TBCONTATO
                       ORDER BY DATACRIACAO ASC";
            
            $oResultado = $this->oDataBase->consultar($sQuery);
            $aData = [];

            while($aResultado = pg_fetch_assoc($oResultado)){
                $aData []= $aResultado;
            }

            return $aData;
        }

        public function buscarContatoBD($sNome){
            $sQuery = "SELECT ID,
                              NOME,
                              EMAIL,
                              TELEFONE,
                              DATACRIACAO,
                              DATAATUALIZACAO
                        FROM  TBCONTATO
                       WHERE NOME ILIKE '%$sNome%'
                       ORDER BY DATACRIACAO ASC";

            $oResultado = $this->oDataBase->consultar($sQuery);
            $aData = [];

            while ($aResultado = pg_fetch_assoc($oResultado)){
                $aData[] = $aResultado;
            }

            return $aData;

        }

        public function inserirContatoBD($sNome,$sEmail,$sTelefone){

            $sNome = pg_escape_string($sNome);
            $sEmail = pg_escape_string($sEmail);
            $sTelefone = pg_escape_string($sTelefone);

            $sComando = "INSERT INTO TBCONTATO
                                (NOME,EMAIL,TELEFONE)
                         VALUES ('$sNome','$sEmail','$sTelefone')";

            $this->oDataBase->executarComando($sComando);

        }
        
    }