<?php

    namespace Config\DataBase;

    class DataBase{
        private static $oConexao;
        private static $sHost = 'localhost';
        private static $sPort = '5432';
        private static $sUser = 'postgres';
        private static $sPassword = 'postgres';
        private static $sDataBaseName = 'biblioteca_livros';

        public static function conectar(){
            $sConexao = "host = $this->sHost
                         port = $this->sPort
                         user = $this->sUser
                         password = $this->sPassword
                         dbname = $this->sDataBaseName";

            return pg_connect($sConexao);
        }

        public static function obterConexao(){
            if (self::$oConexao==null){
                self::$oConexao = self::conectar();
            } 
            return self::$oConexao;
        }

        public static function fecharConexao(){
            if (self::$oConexao){
                pg_close(self::$oConexao);
                self::$oConexao = null;
            }
        }

    }