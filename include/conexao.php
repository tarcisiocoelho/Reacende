<?php

    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "reascende";

    $conn = mysqli_connect($severname, $username, $password, $database);

    if(!$conn){
        die("A conexão com o banco de dados falhou: " .mysqli_connect_error());
    }
?>