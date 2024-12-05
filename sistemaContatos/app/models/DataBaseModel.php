<?php

    namespace App\Models;

    class DataBaseModel{
        private $sHost = 'localhost';
        private $sPort = '5432';
        private $sDataBaseName = 'sistema_contatos';
        private $sUsername = 'postgres';
        private $sPassword = 'postgres';
        protected $oConexao;

        public function conectarBD(){
            $sConexao = "host = $this->sHost
                        port = $this->sPort
                        dbname = $this->sDataBaseName
                        user = $this->sUsername
                        password = $this->sPassword";
            
            $this->oConexao = pg_connect($sConexao);
        }

        public function criarConexao(){
            if ($this->oConexao === null){
                $this->conectarBD();
            }
        }

        public function consultar($sQuery){
            $this->criarConexao();
            return pg_query($this->oConexao, $sQuery);
        }


        public function executarComando($sComando){
            $this->criarConexao();
            pg_query($this->oConexao,$sComando);
        }



    }