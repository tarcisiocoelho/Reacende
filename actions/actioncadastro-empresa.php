<?php
    if(isset($_POST['nome_empresa']) && isset($_POST['nome_contato']) && isset($_POST['cnpj']) && isset($_POST['email']) && isset($_POST['senha'])){
            
        $nome_empresa               = $_POST['nome_empresa'];
        $nome_contato               = $_POST['nome_contato'];
        $cnpj                       = $_POST['cnpj'];
        $email                      = $_POST['email'];
        $senha                      = $_POST['senha'];
        
        $sql = "INSERT INTO cadastroempresa (nome_empresa, nome_contato, cnpj, email, senha) VALUES ('$nome_empresa', '$nome_contato', '$cnpj', '$email', '$senha')";

        mysqli_query($conn, $sql);

        header('Location: ./cadastro-concluido.php');
    }
?>