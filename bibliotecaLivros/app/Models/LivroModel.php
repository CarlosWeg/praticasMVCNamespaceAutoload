<?php

    namespace Models\LivroModel;
    use config\DataBase;

    class LivroModel{

        public function obterLivrosBD(){
            $oConexao = DataBase::obterConexao();
            
            $sSelect = "SELECT *
                         FROM TBLIVROS";
            
            $oResultado = pg_query($oConexao,$sSelect);
            $aData = [];

            while ($aResultado = pg_fetch_assoc($oResultado)){
                $aData[] = $aResultado;
            }

            return $aData;

        }

        public function buscarPorIdDB($id){
            $oConexao = DataBase::obterConexao();

            $sSelect = "SELECT *
                         FROM TBLIVROS
                        WHERE ID = $1";
            
            $oResultado = pg_query_params($oConexao,$sSelect,[$id]);

            return pg_fetch_assoc($oResultado);
        }

        public function cadastrarLivroDB($titulo,$autor,$isbn){
            $oConexao = DataBase::obterConexao();

            $sInsert = "INSERT INTO TBLIVROS
                               (TITULO,AUTOR,ISBN)
                        VALUES ($1,$2,$3)";
        
            pg_query_params($oConexao,$sInsert,[$titulo,$autor,$isbn]);
        }

        public function atualizarDisponivelDB($id){
            $oConexao = DataBase::obterConexao();

            $sUpdate = "UPDATE TBLIVROS
                           SET DISPONIVEL = NOT DISPONIVEL
                         WHERE ID = $1";
            
            pg_query_params($oConexao,$sUpdate,[$id]);
            
        }

    }