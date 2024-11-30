<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet"/>
    <title>França</title>
</head>
    <body>
    <?php
    session_start();
    include("pages/conf/functions.php");   
    include("pages/conf/conectaMysql.php");   

    include("pages/usuario/function.php"); 

    unset($_SESSION['login']);

    if(!empty($_POST)){
        varDump2($_POST);
            if ($usuario = buscaUsuarioEmail($_POST['email'])){
                if(md5($_POST['senha']) == $usuario[0]['senha']){
                    varDump2('Senha válida');
                    $_SESSION['login'] = $usuario[0];
                    redireciona("index.php");
                } else {
            varDump2('Senha inválida');
            }
        }
    }

    // $usuario = array( 
    //     'nome'=>'fulano de tal',
    //     'email'=>'fulanodetal@gmail.com',
    //     'senha'=>md5('fulano')
    // );
    // insertUsuario($usuario);
    
    ?>
        <a href="pages/home.php" class="btn-link">
            <button class="btn"><--Voltar</button>
        </a>

        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
    
            <button type="submit">Entrar</button>
            <button type="button" onclick="window.location.href='pages/usuario/formNew.php';">Criar Conta</button>    
        </form>
    </body>
</html>