<?php

function autoload($sClassName) {
    include(__DIR__ . "\\" . preg_replace('/(model|view|controller)(\w+)$/', '$1_$2', strtolower($sClassName)) . ".php");
}

spl_autoload_register("autoload");

$oControllerPessoa = new Controller\ControllerPessoa();
$oControllerPessoa->processaDados();
