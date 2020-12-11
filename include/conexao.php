<?php

    $severname = "localhost";
    $username = "reacende";
    $password = "@Reacende50";
    $database = "reascende";

    $conn = mysqli_connect($severname, $username, $password, $database);

    if(!$conn){
        die("A conexão com o banco de dados falhou: " .mysqli_connect_error());
    }
?>