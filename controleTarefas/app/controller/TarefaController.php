<?php

    namespace App\Controller;
    use App\Model\Tarefa;

    require_once '../config/autoload.php';

    class TarefaController{
        private $tarefa;

        public function __construct(){
            $this->tarefa = new Tarefa();
        }

        public function listarTarefas(){
            return $this->tarefa->listar();
        }

        public function criarTarefa($sDescricao){
            $this->tarefa->criar($sDescricao);
        }

        public function removerTarefa($id){
            $this->tarefa->deletar($id);
        }

        public function atualizarStatus($id){
            $this->tarefa->atualizar($id);
        }

    }