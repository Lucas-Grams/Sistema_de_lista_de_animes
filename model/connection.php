<?php

    $connection;

    function connect(){
        global $connection;
        $server = 'localhost';
        $user = 'root';
        $key = '';
        $database = 'animes';
        $connection = mysqli_connect($server, $user, $key, $database)
            or die(mysqli_connect_error());
    }

    function query($sql){
        global $connection;
        mysqli_query($connection, "SET CHARACTER SET utf8");
        $query = mysqli_query($connection, $sql)
            or die(mysqli_error($connection));
        return $query;
    }

    function close(){
        global $connection;
        mysqli_close($connection);
    }
?>