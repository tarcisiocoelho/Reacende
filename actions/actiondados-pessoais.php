<?php
        if(isset($_POST['rg']) && isset($_POST['cpf']) && isset($_POST['ie']) && isset($_POST['data_nascimento']) && isset($_POST['cidade']) && isset($_POST['uf']) && isset($_POST['nacionalidade']) && isset($_POST['genero']) && isset($_POST['telefone']) && isset($_POST['telefone2'])){

            $rg                     = $_POST['rg'];
            $cpf                    = $_POST['cpf'];
            $ie                     = $_POST['ie'];   
            $data_nascimento        = $_POST['data_nascimento'];
            $cidade                 = $_POST['cidade'];
            $uf                     = $_POST['uf'];
            $nacionalidade          = $_POST['nacionalidade'];   
            $genero                 = $_POST['genero'];   
            $telefone               = $_POST['telefone'];   
            $telefone2              = $_POST['telefone2'];

            $sql = "INSERT INTO dados_pessoais (rg, cpf, data_nascimento, cidade, uf, nacionalidade, genero, telefone, telefone2) VALUES ('$rg', '$cpf', '$data_nascimento', '$cidade', '$uf', '$nacionalidade', '$genero', '$telefone', '$telefone2')"; 

            mysqli_query($conn, $sql);
        }
?>