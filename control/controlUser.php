<?php
    
    include('../model/crudUser.php');

    if(isset($_POST['opcao'])){
        $opcao= $_POST['opcao'];
    }else{
        $opcao = $_GET['opcao'];
    }
    
    switch($opcao){
        case 'login':
            $nome = $_POST['nome'];
            $senha = sha1($_POST['senha']);
            loginUser($nome, $senha);
            break;
        
        case 'cadastrarConta':
            header("Location:../view/cadastrarUser.php");
            break;
    
        case 'cadastrar':
            $nome = $_POST["nome"];
            $senha1 = sha1($_POST["senha"]);
            $senha2 = sha1($_POST["confirmsenha"]);
            cadastrarUser($nome, $senha1, $senha2);
            break;

        case 'sair':
            session_start();
            session_destroy();
            header('Location:../view/index.php');
            break;
    }
?>

