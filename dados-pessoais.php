<?php
    include_once '../include/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/dados-pessoais.css">
    <script src="./js/cadastro.js"></script>
    
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
            <a href="html/login.php"><button>Entrar</button></a> 
        </div>
    </header>

    <main>
        <div class="caixaDeTexto">
            <h2>Olá,</h2>
            <p>ainda faltam algumas informções para validarmos sua inscrição:</p>
            <form action="" method="post">
                <input class="rg" type="text" name="rg" id="rg" placeholder="Digite seu RG" required>
                <input class="cpf" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required>
                <input class="ie" type="text" name="ie" id="ie" placeholder="IE" required><br>
                <input class="dataNascimento" type="date" name="data_nascimento" id="dataNascimento" placeholder="Data de Nascimento" required>
                <input class="cidade" type="text" name="cidade" id="cidade" placeholder="Cidade" required>
                <input class="uf" type="text" name="uf" id="uf" placeholder="UF" required>
                <input class="nacionalidade" type="text" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade" required>
                <input class="genero" type="text" name="genero" id="genero" placeholder="Gênero" required>
                <input class="telefone" type="text" name="telefone" id="telefone" placeholder="Telefone" required>
                <input class="telefone" type="text" name="telefone2" id="telefone2" placeholder="Segundo Telefone" required>
                <div>
                <a href="conhecimentos-gerais.php"><button type="submit" id="enviar" onclick="clicenviar()">Enviar</button></a>
                </div>
            </form>
            <div class="botoes">
                <a href="cadastrar.php"><button class="mudarPagina" type="button" id="voltar" onclick="clicvoltar()">Voltar</button></a>
                <a href="endereco.php"><button class="mudarPagina"type="button" id="avancar" onclick="avancar()">Avançar</button></a>
            </div>
        </div>
        <?php
           include_once './actions/actiondados-pessoais.php';
        ?>

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