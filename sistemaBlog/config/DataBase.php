<?php

namespace Config\DataBase;

class DataBase{
    private static $sHost = 'localhost';
    private static $sPort = '5432';
    private static $sDataBaseName = 'sistema_blog';
    private static $sUser = 'postgres';
    private static $sPassword = 'postgres';
    private static $oConexao;

    public static function obterConexao(){
        $sConexao = 'host= ' . self::$sHost .
                    ' port=' . self::$sPort .
                    ' dbname=' . self::$sDataBaseName .
                    ' user=' . self::$sUser .
                    ' password=' . self::$sPassword;
        
        return pg_connect($sConexao);
    }

    public static function conectarBD(){
        if (self::$oConexao === null){
            self::$oConexao = self::obterConexao();
        }
        return self::$oConexao;
    }
}