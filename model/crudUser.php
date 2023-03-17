<?php
    include('../model/connection.php');
    
    function loginUser($nome, $senha){
        connect();
        $consulta = query("SELECT name_user, password_user, id_user FROM user WHERE '$nome' = name_user AND '$senha' = password_user");
        $dados = mysqli_fetch_assoc($consulta);
        close();
        if($dados['password_user'] == $senha && $dados['name_user'] == $nome){
            session_start();
            $_SESSION['nome'] = $nome;
            $_SESSION['id'] = $dados['id_user'];
            header("Location:../view/menu.php");
        }else{
            session_start();
            $_SESSION['error'] = "Login inexistente! Tente novamente.";
            header("Location:../view/index.php");
        }
    }

    function cadastrarUser($nome, $senha1, $senha2){
        connect();
        $consulta_nome = query("SELECT * FROM user WHERE name_user = '$nome'");
        $cont = mysqli_num_rows($consulta_nome);
        if($cont != 0){
            session_start();
            $_SESSION['error_name'] = "Nome já utilizado! tente outro diferente.";
            header("Location:../view/cadastrarUser.php");
            
        }else if($senha1 != $senha2){
            session_start();
            $_SESSION['errorkey'] = "As senhas não conferem! Tente novamente.";
            header("Location:../view/cadastrarUser.php");
        }else{
            connect();
            $cadastro = query("INSERT INTO user (name_user, password_user) VALUES ('$nome', '$senha1')");
            $consulta = query("SELECT name_user, password_user, id_user FROM user WHERE '$senha1' = password_user AND '$nome' = name_user" );
            $dados = mysqli_fetch_assoc($consulta);
            close();
            if($cadastro){
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['id'] = $dados['id_user'];
                header("Location:../view/menu.php");
            }
        }
    }
?>