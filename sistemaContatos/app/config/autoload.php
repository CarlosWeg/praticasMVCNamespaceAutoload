<?php

//Registra uma função anônima com autoload
//A função é chamada sempre que tentar usar uma classe não definida
spl_autoload_register(function ($class_name) {
    $base_dir = __DIR__ . '/../../'; //Sobe dois níveis a partir do diretório atual
    $file = $base_dir . str_replace('\\', '/', $class_name) . '.php';//Substitui as barras invertidas do namespace e adiciona .php
    

    //Verifica se o arquivo existe e requer
    if (file_exists($file)) {
        require_once $file;
    }
});