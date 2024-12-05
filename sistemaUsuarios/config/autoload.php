<?php

function autoload($sNomeClasse){
    $sBaseDir = __DIR__ . '/../';
    $sCaminho = $sBaseDir . str_replace('\\','/',$sNomeClasse . '.php');

    if (file_exists($sCaminho)) {
        require_once $sCaminho;
    }

}

spl_autoload_register('autoload');