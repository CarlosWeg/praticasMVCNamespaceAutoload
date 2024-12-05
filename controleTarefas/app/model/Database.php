<?php

    namespace App\Model;

    require_once '../config/autoload.php';

    class Database{
        private $sHost = 'localhost';
        private $sPort = '5432';
        private $sUsername = 'postgres';
        private $sPassword = 'postgres';
        private $sDbName = 'lista_tarefas';
        private $oConexao;

        public function conectarBD(){
            $sConexao = "host = $this->sHost
                         port = $this->sPort
                         user = $this->sUsername
                         password = $this->sPassword
                         dbname = $this->sDbName";

            $this->oConexao = pg_connect($sConexao);
        }

        public function obterConexao(){
            if ($this->oConexao === null){ 
                $this->conectarBD();
            }
        }

        public function executarConsulta($sConsulta){
            $this->obterConexao();
            $oResultado = pg_query($this->oConexao, $sConsulta);
            $aData = [];

            while ($aResultado = pg_fetch_assoc($oResultado)){
                $aData[] = $aResultado;
            }

            return $aData;

        }

        public function executarComando($sComando){
            $this->obterConexao();
            pg_escape_string($sComando);
            return pg_query($this->oConexao,$sComando);
        }

    }