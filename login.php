<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js"></script>
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
            <a href="login.php"><button>Entrar</button></a>
            <a href="cadastrar.php"><button>Cadastre-se</button></a>  
        </div>
    </header>

    <main>
        <div class="principal">
            <h2>LOGIN</h2>
            <form>
                <input class="input-texto email" type="email" name="email" id="email" placeholder="E-mail"><br>
                <input class="input-texto senha" type="password" name="password" id="password" placeholder="Digite sua senha">
                <button type="submit" id="entrar" onclick="clicamarelo()">Entrar</button>
                <a href="recuperarSenha.php"><p id="esquecisenha" onclick="cliclinha()">ESQUECI MINHA SENHA</p></a>
            </form>  
        </div>
        <div class="imgcentro">
            <img src="./imagens/lampada.png" alt="Foto de um senhor com a mão na lâmpada">
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
                    <a href="https://www.facebook.com/"><img src="./imagens/redes sociais/facebook.png" alt="Facebook"></a>
                </div>
                <div class="redesSociais" id="instagram">
                    <a href="https://www.instagram.com/"><img src="./imagens/redes sociais/instagram.png" alt="Instagram"><a>
                </div>
                <!-- colocar facebook, youtube e whatsapp -->
            </div>
            
            
        </div>
        <hr>   
        <p class="assinaturaRodape">© REACENDEInc. 2020 We love our users!</p> 
    </footer>
</body>

</html>