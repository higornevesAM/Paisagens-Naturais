<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet"/>
    <title>França</title>
</head>
    <body>
    <?php
    session_start();
    include("pages/conf/functions.php");   
    include("pages/conf/conectaMysql.php");   
    include("pages/usuario/function.php");   

    // unset($_SESSION['login']);

    if(!isset($_SESSION['login'])){
        redireciona("login.php");
    } else {
        // varDump2($_SESSION['login']);
    }

    // $usuario = array( 
    //     'nome'=>'fulano de tal',
    //     'email'=>'fulanodetal@gmail.com',
    //     'senha'=>md5('fulano')
    // );
    // insertUsuario($usuario);
    
    // if ($usuario = buscaUsuarioEmail('emilianocsneto@gmail.com')){
    //     // varDump2($usuario);
    //     if(md5('neto@123') == $usuario[0]['senha']){
    //         // varDump2('Senha válida');
    //     } else {
    //         varDump2('Senha inválida');
    //     }
    // }    
    ?>


<?php 
        include "/pages/menu.php";
    ?>

        <section class="conteudo">
            <div class="textocadetral">
                <h1 class="textoh1">As paisagens Françesas</h1>
            </div>
        </section>

        <section class="introducao">
                <h1 class="t1">França</h1>
                <h2 class="t2">
                    A França, localizada na charmosa Europa Ocidental, é um país que encanta com sua rica história e cultura vibrante. Com cerca de 67 milhões de habitantes, oferece paisagens deslumbrantes, desde os majestosos Alpes até as belas praias do Mediterrâneo. Cidades icônicas como Paris, repleta de museus e cafés charmosos, capturam a imaginação de todos que a visitam.

                    A Revolução Francesa, um evento crucial na história, não apenas transformou a política do país, mas também inspirou movimentos ao redor do mundo. A língua francesa é falada em diversos cantos do globo, refletindo a influência cultural da nação. Conhecida como um verdadeiro berço de arte, moda e filosofia, a França atrai milhões de turistas todos os anos, que vêm apreciar sua deliciosa culinária e vinhos renomados.
                    
                    Além disso, o país desempenha um papel importante na União Europeia e é um defensor dos direitos humanos e da cultura. Combinando tradições ricas e inovações constantes, a França se revela um lugar fascinante e inspirador, que continua a cativar o coração de pessoas de todas as partes do mundo.
                </h2>
                <div class="belezasNaturais">
                    <div class="bn">
                        <h3 class="t3">Mont Saint-Michel</h3>
                        <img src="assets/mont.jpg" alt="Mont Saint-Michel" class="imgMont"/>
                    </div>

                    <div class="bn">
                        <h3 class="t3">Vale de Loire</h3>
                        <img src="assets/vale.jpg" alt="Mont Saint-Michel" class="imgVale"/>
                    </div>

                    <div class="bn">
                        <h3 class="t3">Região da Provença</h3>
                        <img src="assets/provenca.jpg" alt="Mont Saint-Michel" class="imgProv"/>
                    </div>

                </div>

                <div class="saibamais">
                    <h1 class="t2">Saiba mais sobre as Belezas naturais clicando aqui</h1>
                    <a class="saibamaisbut" href="pages/belezasnaturais.html">Belezas Naturais</a>
                </div>
        </section>


        <!-- <section id="login-modal" class="modal">
            <form action="cads/salvar_usuario.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
        
                <button type="submit">Cadastrar</button>
            </form>
        </section> -->
        
        
          <!-- <script src="scripts/login.js"></script> -->


    </body>
</html>