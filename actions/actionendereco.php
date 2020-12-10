<?php
                
    if(isset($_POST['endereco']) && isset($_POST['cidade']) && isset($_POST['numero']) && isset($_POST['pessoasmesmacasa']) && isset($_POST['rendafamiliar']) && isset($_POST['escolaridade']) && isset($_POST['etnia']) && isset($_POST['ciente'])){
                
        $endereco                   = $_POST['endereco'];
        $cidade                     = $_POST['cidade'];
        $numero                     = $_POST['numero'];
        $numeroPessEmCasa           = $_POST['pessoasmesmacasa'];
        $renda                      = $_POST['rendafamiliar'];
        $escolaridade               = $_POST['escolaridade'];
        $etnia                      = $_POST['etnia'];
        $check                      = $_POST['ciente'];
                
                    

        $sql = "INSERT INTO endereco (endereco, cidade, numero, pessoasmesmacasa, rendafamiliar, escolaridade, etnia, ciente) VALUES ('$endereco', '$cidade', '$numero', '$numeroPessEmCasa', '$renda', '$escolaridade', '$etnia', '$check')";

        mysqli_query($conn, $sql);
    }
                
?>