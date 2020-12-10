<?php
    include_once './include/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/cadastrar.css">
    <script src="../js/cadastro.js"></script>
    
    <title>Reacende</title>
    <style>
        .botoes{
            margin-top: 20px;
            display: flex;
        }
        .mudarPagina {
            background: #FCC800;
            color: #ffffff;
            font-weight: 700;
            margin: 2 1em 0 62%;
            padding: 0.3em 2em ;
            border-radius: 0.4em;
            border: none;
            font-weight: 600;
            font-size: 1.2em;
            cursor: pointer;
        }
        .botoes a{
           margin: 0 auto;
        }
    </style>
</head>

<body>
    <header>
        <div class="menu">
            <a href="index.php"><img id="logo" src="./imagens/lampada.png" alt=""></a>
            <a href="index.php">
                <p>REACENDE</p>
            </a>
            <a href="sobre-nos.php">
                <p>SOBRE NÓS</p>
            </a>
            <a href="sou-mais-50.php">
                <p>SOU +50</p>
            </a>
            <a href="sou-empresa.php">
                <p>SOU EMPRESA</p>
            </a>
            <a href="nossos-cursos.php">
                <p>NOSSOS CURSOS</p>
            </a>
        </div>

        <div class="menuBotao">
            <a href="login.php"><button>Entrar</button></a> 
        </div>
    </header>

    <main>
        <div class="caixaDeTexto">
            <h2>CADASTRE-SE</h2>
            <form action="" method="post">
                <input class="input-nome sobrenome" type="text" name="nome" id="nome" placeholder="Nome" required>
                <input class="input-sobrenome" type="text" name="snome" id="snome" placeholder="Sobrenome" required>
                
                <input class="input-texto email" type="email" name="email" id="email" placeholder="E-mail" required>
                <br>
                <input class="input-texto senha" type="password" name="password" id="password" placeholder="Crie sua senha" required><br>
                <input class="input-texto senha" type="password" name="confirme" id="confirme" placeholder="Confirme sua senha" required><br>
                
                
                <a href="endereco.php"><button type="submit" id="enviar" onclick="clicenviar()">Enviar</button></a>
                
            </form>
            <div class="botoes">
                <a href="index.php"><button class="mudarPagina" type="button" id="voltar" onclick="clicvoltar()">Voltar</button></a>
                <a href="dados-pessoais.php"><button class="mudarPagina"type="button" id="avancar" onclick="avancar()">Avançar</button></a>
            </div>
            
        </div>

        <?php
            include_once './actions/actioncadastrar.php';
        ?>
        <script>
            function avancar(){
                let avancar= document.getElementById('avancar');
                avancar.style.backgroundColor='blue';
            }
        </script>
    </main>
    <footer>
        <div class="info">
            <div class="sobreNos">
                <p class="topoDasInfos">REACENDE</p><br>
                <p class="descricao">A Reacende nasceu com o intuito de oferecer oportunidades visando exclusivamente uma classe que é pouco vista, estamos falando do público 50+. Através do conhecimento pessoal e profissional, iremos oferecer cursos das ferramentas mais utilizadas no mercado buscando a recolocação desse público no mercado de trabalho.</p>
            </div>
            <div class="endereço">
                <p class="topoDasInfos">ENDEREÇO</p><br>
                <p class="regiao">Matriz</p>
                    <p class="inf">Rua Alice, 150, Laranjeiras, Rio de Janeiro, RJ</p>
                    <p class="info2">CEP: 22.241-020</p><br>
                    
                <p class="regiao">Filial RJ</p>
                    <p class="inf">Rua das Acácias, 39, Gávea, Rio de Janeiro, RJ</p>
                    <p class="info2">CEP: 22.451-060</p>
                
            </div>
            <div class="contato">
                <p class="topoDasInfos">CONTATO</p><br>
                <p class="email">E-mail</p>
                    <p class="inf">contato@reascende.com.br</p>
                    <p class="info2">(11) 93487-8585</p>
            </div>
        </div>

        <div class="rodape">
            <div class="containerRedesSociais">
                <div class="redesSociais" id="whatsapp">
                    <a href="https://web.whatsapp.com/"><img src="./imagens/redes sociais/whatsapp.png"
                            alt="Whatsapp"></a>
                </div>
                <div class="redesSociais" id="youtube">
                    <a href="https://www.youtube.com/"><img src="./imagens/redes sociais/youtube.png"
                            alt="Youtube"></a>
                </div>
                <div class="redesSociais" id="facebook">
                    <a href="https://www.facebook.com/"><img src="./imagens/redes sociais/facebook.png"
                            alt="Facebook"></a>
                </div>
                <div class="redesSociais" id="instagram">
                    <a href="https://www.instagram.com/"><img src="./imagens/redes sociais/instagram.png"
                            alt="Instagram"><a>
                </div>
                <!-- colocar facebook, youtube e whatsapp -->
            </div>


        </div>
        <hr>
        <p class="assinaturaRodape">© REACENDEInc. 2020 We love our users!</p>
    </footer>
</body>

</html>