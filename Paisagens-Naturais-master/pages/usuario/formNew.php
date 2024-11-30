<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet"/>
    <title>França</title>
</head>
    <body>
        

        <section class="introducao">


        <a href="../home.php" class="btn-link">
            <button class="btn"><--Voltar</button>
        </a>

            <?php
            require_once('../conf/functions.php');
            require_once('../conf/conectaMysql.php');
            require_once('function.php');
            require_once('controller.php');
            ?>

            <h1 class="t1">Cadastro de usuários</h1>
            <form method="post" action="formNew.php">
                <input type="text" name="nome" placeholder="Nome completo" require>
                <input type="mail" name="email" placeholder="E-mail" require>
                <input type="password" name="senha1" placeholder="senha" require>
                <input type="password" name="senha2" placeholder="Confirme senha" require>
                <button type="submit" name="acao" value="criarUsuario">Salvar</button>
                <button type="button" onclick="window.location.href='../../login.php';">Entrar</button>
            </form>
        </section>


    </body>
</html>