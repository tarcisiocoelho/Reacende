<?php
        if(isset($_POST['basico_internet']) && isset($_POST['curriculo']) && isset($_POST['gmail_outlook']) && isset($_POST['desenvolvimento_pessoal']) && isset($_POST['pacote_office']) && isset($_POST['soft_skils'])){
                
            $internet                   = $_POST['basico_internet'];
            $curriculo                  = $_POST['curriculo'];
            $gmail_outlook              = $_POST['gmail_outlook'];
            $desen_pessoal              = $_POST['desenvolvimento_pessoal'];
            $office                     = $_POST['pacote_office'];
            $skils                      = $_POST['soft_skils'];         
            
            $sql = "INSERT INTO conhecimentos_gerais (basico_internet, curriculo, gmail_outlook, desenvolvimento_pessoal, pacote_office, soft_skils) VALUES ('$internet', '$curriculo', '$gmail_outlook', '$desen_pessoal', '$office', '$skils')";
            
            mysqli_query($conn, $sql);

            
        }
?>