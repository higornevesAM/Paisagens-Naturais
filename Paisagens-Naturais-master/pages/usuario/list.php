<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet"/>
    <title>França</title>
</head>
    <body>
        <header>
            <div class="cabeca">
                <div class="logo">
                    <a href="../../pages/home.html">
                        <img class="img" src="../../assets/paris.png" alt="logo"/> 
                    </a>
                    
                </div>
                <div class="menu">
                    <a class="fontenav" href="../home.php">Home</a>
                    <a class="fontenav" href="../belezasnaturais.html">Belezas Naturais</a>
                    <a class="fontenav" href="../turismo.html">Pontos turísticos</a>
                    <a class="fontenav" href="../usuario/list.php">usuario</a>
                </div>
            </div>
        </header>

        <section class="introducao">

            <?php
            require_once('../conf/functions.php');
            require_once('../conf/conectaMysql.php');
            require_once('function.php');
            ?>

            <h1 class="t1">Listagem de usuários</h1>
            <p><a href="formNew.php">Novo</a></p>
            <table>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
            <?php if ($usuarios = buscaTodosUsuarios()): ?>
            <?php foreach($usuarios as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['nome'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['dtexclusao'] ?></td>
                <td></td>
            </tr>
            <?php endforeach ?>
            <?php endif ?>

            </table>
        </section>
  
        
        
          <script src="../../scripts/login.js"></script>


    </body>
</html>