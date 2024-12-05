<?php

namespace Controller;

class ControllerPessoa {

    public function processaDados() {
        $oModelPessoa = new \Model\ModelPessoa();
        $oModelPessoa->setNome('Nome Pessoa');
        $oViewPessoa = new \View\ViewPessoa();
        $oViewPessoa->imprime($oModelPessoa);
    }

}
