<?php

    namespace App\Model;

    use App\Model\Database;

    require_once '../config/autoload.php';

    class Tarefa{
        private $oDataBase;

        public function __construct(){
            $this->oDataBase = new Database;
        }

        public function listar(){
            $sConsulta = "SELECT ID,
                                 DESCRICAO,
                                 STATUS
                            FROM TBTAREFA";

            return $this->oDataBase->executarConsulta($sConsulta);
        }

        public function criar($sDescricao){
            pg_escape_string($sDescricao);
            $sComando = "INSERT INTO TBTAREFA
                                (DESCRICAO)
                         VALUES ('$sDescricao')";
            $this->oDataBase->executarComando($sComando);
        }

        public function atualizar($id){
            $sComando = "UPDATE TBTAREFA
                            SET STATUS = NOT STATUS
                          WHERE ID = $id";
            
            $this->oDataBase->executarComando($sComando);
        }

        public function deletar($id){
            $sComando = "DELETE FROM TBTAREFA
                          WHERE ID = $id";
            
            $this->oDataBase->executarComando($sComando);
        }

    }