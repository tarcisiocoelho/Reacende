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
    <link rel="stylesheet" href="./css/cadastroEmpresa.css">
    <script src="./js/cadastroEmpresa.js"></script>
    <title>Reacende-Cadastro Empresa</title>
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
        <div class="caixaDeTexto2">
            <h2>Cadastre-se</h2>
            <form action="" method="post">
                <input class="input-texto nomeEmpresa" type="text" name="nome_empresa" id="nome_empresa" placeholder="NOME DA EMPRESA" required>
                <input class="input-texto nomeContato" type="text" name="nome_contato" id="nome_contato" placeholder="NOME PARA CONTATO" required>
                <input class="input-texto cnpj" type="number" name="cnpj" id="cnpj" placeholder="CNPJ" required>
                <br>
                <input class="input-texto email" type="email" name="email" id="email" placeholder="E-MAIL" required><br>
                <input class="input-texto senha" type="password" name="senha" id="senha" placeholder="CRIE SUA SENHA" required><br>
                <input class="input-texto senha" type="password" name="confirme_senha" id="confirme_senha" placeholder="CONFIRME SUA SENHA" required><br>
                
                <button type="submit" name="enviar" id="botao" onclick="clicar()">Enviar</button>
                <a href="index.php"><button class="mudarPagina" type="button" id="avancar" onclick="clicvoltar()">Início</button></a>
            </form>
        </div>

        <?php
            include_once './actions/actioncadastro-empresa.php';
        ?>
        
        

    </main>
    <footer>
        <div class="info">
            <div class="sobreNos">
                <p class="topoDasInfos">REACENDE</p><br>
                <p>A Reacende nasceu com o intuito de oferecer oportunidades visando exclusivamente uma classe que é pouco vista, estamos falando do público 50+. Através do conhecimento pessoal e profissional, iremos oferecer cursos das ferramentas mais utilizadas no mercado buscando a recolocação desse público no mercado de trabalho.</p>
            </div>
            <div class="endereço">
                <p class="topoDasInfos">ENDEREÇO</p><br>
                <p>Matriz<br><br>
                    Rua Alice, 150, Laranjeiras, Rio de Janeiro, RJ<br>
                    CEP.: 22.241-020 <br><br>

                    Filial RJ<br><br>
                    Rua das Acácias, 39, Gávea, Rio de Janeiro, RJ<br>
                    CEP.: 22.451-060
                </p>
            </div>
            <div class="contato">
                <p class="topoDasInfos">CONTATO</p><br>
                <p>contato@reascende.com.br<br><br>
                    (11) 99999-9999</p>
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