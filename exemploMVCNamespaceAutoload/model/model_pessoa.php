<?php

namespace Model;

class ModelPessoa {

    private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

}
