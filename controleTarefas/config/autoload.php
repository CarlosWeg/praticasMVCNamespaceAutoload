<?php

function autoload($sClassName) {
    // Converte o namespace para o caminho correspondente no sistema de arquivos
    $sClassPath = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $sClassName);

    // Define o caminho base do projeto (ajuste conforme necessário)
    $baseDir = __DIR__ . '/../'; 

    // Caminho completo do arquivo
    $file = $baseDir . $sClassPath . '.php';

    // Verifica se o arquivo existe antes de incluí-lo
    if (file_exists($file)) {
        include_once $file;
    }
}

spl_autoload_register('autoload');
