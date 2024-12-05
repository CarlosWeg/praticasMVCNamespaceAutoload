<?php

    namespace App\Controllers;

    use App\Models\ContatoModel;


    class ContatoController{
        private $oContato;

        public function __construct(){
            $this->oContato = new ContatoModel();
        }

        public function obterContatos(){
            return $this->oContato->obterContatosBD();
        }

        public function buscarContato($sNome){
            return $this->oContato->buscarContatoBD($sNome);
        }

        public function inserirContato($sNome,$sEmail,$sTelefone){
            return $this->oContato->inserirContatoBD($sNome,$sEmail,$sTelefone);
        }

    }
