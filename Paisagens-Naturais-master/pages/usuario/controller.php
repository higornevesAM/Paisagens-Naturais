<?php

if(!empty($_POST)){
    $dados = $_POST;
} else {
    $dados = $_GET;
}

//varDump2($dados);

if(isset($dados['acao'])){
    switch ($dados['acao']) {
        case 'criarUsuario':
            varDump2('Entrou no criar usuario');
            insertUsuario($dados);
        break;

    }
}