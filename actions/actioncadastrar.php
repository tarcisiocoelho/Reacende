<?php
            
    if(isset($_POST['nome']) && isset($_POST['snome']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirme'])){
    
        $nome               = $_POST['nome'];
        $snome              = $_POST['snome'];
        $email              = $_POST['email'];
        $password           = $_POST['password'];
        $confirmePassword   = $_POST['confirme'];
                
        $sql = "INSERT INTO cadastrar (nome, sobrenome, email, confirmasenha) VALUES ('$nome', '$snome', '$email', '$password')";

        mysqli_query($conn, $sql);
    }
?>