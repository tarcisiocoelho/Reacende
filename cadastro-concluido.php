<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/cadstro-concluido.css">
    <script src="./js/cadastro.js"></script>
    <style>
        .mudarPagina {
    background: #FCC800;
    color: #ffffff;
    font-weight: 700;
    margin: 1em 1em 0 62%;
    padding: 0.3em 2em ;
    border-radius: 0.4em;
    border: none;
    font-weight: 600;
    font-size: 1.2em;
    cursor: pointer;
    }
    .botoes{
        display: flex;
        justify-content: center;
        margin: 0 auto;
    }
    
    </style>
    <title>Reacende</title>
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
            <button>Entrar</button>
            
        </div>
    </header>
    <main>
        <div class="caixaDeTexto">
            <h2>Obrigado,</h2>


                
                <p>Confirme seus dados no email, e em breve retornaremos o contato.</p>
                <div class="botoes">
                <a href="index.php"><button class="mudarPagina"type="button" id="avancar" onclick="avancar()">Concluir</button></a>
                </div>

        </div>
        
        
        

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
                    <p>Rua Alice, 150, Laranjeiras,<br> Rio de Janeiro, RJ</p>
                    <p>CEP: 22.241-020</p><br>
                    
                <p class="regiao">Filial RJ</p>
                    <p>Rua das Acácias, 39, Gávea, Rio de Janeiro, RJ</p>
                    <p>CEP: 22.451-060</p>
                
            </div>
            <div class="contato">
                <p class="topoDasInfos">CONTATO</p><br>
                <p class="email">E-mail</p><br>
                    <p>contato@reascende.com.br</p><br>
                    <p>(11) 93487-8585</p>
            </div>
        </div>
        
        <div class="rodape">
            <div class="containerRedesSociais">
                <div class="redesSociais" id="whatsapp">
                    <a href="https://web.whatsapp.com/"><img src="./imagens/redes sociais/whatsapp.png" alt="Whatsapp"></a>
                </div>
                <div class="redesSociais" id="youtube">
                    <a href="https://www.youtube.com/"><img src="./imagens/redes sociais/youtube.png" alt="Youtube"></a>
                </div>
                <div class="redesSociais" id="facebook">
                    <a href="https://www.facebook.com/"><img src="../imagens/redes sociais/facebook.png" alt="Facebook"></a>
                </div>
                <div class="redesSociais" id="instagram">
                    <a href="https://www.instagram.com/"><img src="../imagens/redes sociais/instagram.png" alt="Instagram"><a>
                </div>
                <!-- colocar facebook, youtube e whatsapp -->
            </div>
            
            
        </div>
        <hr>   
        <p class="assinaturaRodape">© REACENDEInc. 2020 We love our users!</p> 
    </footer>
</body>

</html>