<?php

    require_once '../config/autoload.php';
    
    use App\Controller\TarefaController;
    $oTarefaController = new TarefaController();

    if (!empty($_GET['operacao'])) {
        $operacao = $_GET['operacao'];
    } else{
        $operacao = '';
    }
    
    switch ($operacao){

        case'criarTarefa':
            $sDescricao = $_POST['descricao'];
            $oTarefaController->criarTarefa($sDescricao);
            header('Location: index.php');
            break;
        
        case'removerTarefa':
            $id = $_GET['id'];
            $oTarefaController->removerTarefa($id);
            header('Location: index.php');
            break;
        
        case'atualizarTarefa':
            $id = $_GET['id'];
            $oTarefaController->atualizarStatus($id);
            header('Location: index.php');
            break;
        
        default:
            $aTarefas = $oTarefaController->listarTarefas();
            require_once '../app/view/view_tarefa.php';
            break;
    }