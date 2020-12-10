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
    <link rel="stylesheet" href="./css/endereco.css">
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
        
    }
   
    
    .principal{
    background-color: #ffffff;
    width: 50%;
    height: 500px;
    margin: 100px auto;
    border: 1px solid rgba(0, 0, 0, 0.5);
    border-radius: 80px;
    padding: 3px;
    margin-left: auto;
    margin-right: auto;
    box-shadow:0em 0.3em 1em black;
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
            <a href="login.php"><button>Entrar</button></a>
            <a href="cadastrar.php"><button>Cadastre-se</button></a>  
        </div>
    </header>

    <main>
        <div class="principal">
            <div class="alinhar">
                <h3 id="nome-cadastrado"></h3>
                <p>Nós da REACENDE, levamos em consideração o perfil <br> socioeconomico de nossos canditados, por isso responda com sinceridade:</p>
            </div>
            <form action=" " method="post" class="infoPessoais">
                <input class="digiteEndereco" type="text" name="endereco" id="endereco" placeholder="DIGITE SEU ENDEREÇO" required>
                <input type="text" name="cidade" id="cidade" placeholder="CIDADE" required>
                <input class="numero" type="number" name="numero" id="numero" placeholder="Nº" required><br>

                <input class="digiteEndereco" type="text" name="pessoasmesmacasa" id="familia" placeholder="Nº  PESSOAS QUE MORAM NA MESMA CASA" required>
                <select class="renda" name="rendafamiliar" id="renda">
                        <option value="select" selected>Renda familiar</option>
                        <option value="menos de 1.000">MENOS DE $1.000</option>
                        <option value="entre 1.000 e 1.500">ENTRE $1.000 -- $1.500</option>
                        <option value="entre 1.500 e 2.000">ENTRE $1.500 -- $2.000</option>
                        <option value="entre 2.000 e 3.000">ENTRE $2.000 -- $3.000</option>
                        <option value="acima de 3.000">ACIMA DE $3.000</option>
                 </select>

                <div class="alinhar">
                    <select class="escolaridade" name="escolaridade" id="familia" required>
                        <option value="selecione" selected>Selecione o grau de escolaridade</option>
                        <option value="ensino fundamental incompleto">ENSINO FUNDAMENTAL INCOMPLETO</option>
                        <option value="ensino fundamental completo">ENSINO FUNDAMENTAL COMPLETO</option>
                        <option value="ensino medio incompleto">ENSINO MÉDIO INCOMPLETO</option>
                        <option value="ensino med completo">ENSINO MÉDIO COMPLETO</option>
                        <option value="ensino superior">ENSINO SUPERIOR</option>
                    </select>
                    <select class="etnia" name="etnia" id="etnia" required>
                        <option value="select" selected>Selecione sua etnia</option>
                        <option value="negra">NEGRA</option>
                        <option value="parda">PARDA</option>
                        <option value="branca">BRANCA</option>
                    </select>
                </div>
                
                <div class="colunaCheckbox" required>
                    <input class="confirmar" type="checkbox" name="ciente" value="aceito"><label>Estou ciente que a REACENDE irá pedir documento que comprovem as informações declaradas acima.</label>
                </div>
                
                <a href="endereco.php"><button type="submit" id="enviar" onclick="clicenviar()" class="enviar">Enviar</button></a>

            </form>  
            <div class="botoes">
                <a href="dados-pessoais.php"><button class="mudarPagina" type="button" id="voltar" onclick="clicvoltar()">Voltar</button></a>
                <a href="cadastro-concluido.php"><button class="mudarPagina"type="button" id="avancar" onclick="avancar()">Avançar</button></a>
            </div>
            <?php
                include_once './actions/actionendereco.php';
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