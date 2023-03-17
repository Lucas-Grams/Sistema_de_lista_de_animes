<?php
    include('../model/connection.php');
    
    function cadastrarAnime($nameAnime, $qtdEp, $id){
        connect();
        query("INSERT INTO myanimes (name_anime, qtd_ep, id_user) VALUES ('$nameAnime', '$qtdEp', '$id')");
        close();
        header('Location:../view/myAnimes.php');
    }

    function buscarAnimes($id){
        connect();
        $consult = query("SELECT name_anime, qtd_ep, id_user, id_anime FROM myanimes WHERE $id = id_user");
        $result = mysqli_fetch_array($consult);
        close();
        return $consult;
    }

    function searchAnime($id){
        connect();
        $consult = query("SELECT name_anime, qtd_ep FROM myanimes WHERE $id = id_anime");
        $result = mysqli_fetch_array($consult);
        close();
        return $result;
    }

    function editarAnime($nameAnime, $qtdEp, $id){
        connect();
        query("UPDATE myanimes SET name_anime = '$nameAnime', qtd_ep = '$qtdEp' WHERE id_anime = $id");
        close();
        header("Location:../view/myAnimes.php");
    }

    function deleteAnime($id){
        connect();
        query("DELETE FROM myanimes WHERE id_anime = '$id'");
        close();
        header("Location:../view/myAnimes.php");
    }
?>