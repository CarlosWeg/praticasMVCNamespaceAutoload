<?php

    $sHost = 'localhost';
    $sPort = '5432';
    $sUser = 'postgres';
    $sPassword = 'postgres';
    $sDataBaseName = 'sistema_usuarios';

    $sConexao = "host = $sHost
                 port = $sPort
                 user = $sUser
                 password = $sPassword
                 dbname = $sDataBaseName";
    
    $oDataBase = pg_connect($sConexao);
    return $oDataBase;