<?php
    include('../model/crudAnimes.php');

    if(isset($_POST['opcao'])){
        $opcao= $_POST['opcao'];
    }else{
        $opcao = $_GET['opcao'];
    }

    switch($opcao){
        case 'add':
            $nameAnime = $_POST['nameAnime'];
            $qtdEp = $_POST['qtdEp'];
            $id = $_POST['id'];
            cadastrarAnime($nameAnime, $qtdEp, $id);
            break;
        
        case 'editar':
            $id = $_GET['id'];
            header("Location:../view/editAnimes.php?id=$id");
            break;

        case 'edit':
            $nameAnime = $_POST['nameAnime'];
            $qtd_ep = $_POST['qtdEp'];
            $id = $_POST['id'];
            editarAnime($nameAnime, $qtd_ep, $id);
            break;

        case 'delete':
            $id = $_GET['id'];
            deleteAnime($id);
            break;
    }
?>