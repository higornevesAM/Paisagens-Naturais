<?php

function buscaTodosUsuarios(){
    $sql = "SELECT * FROM `usuario` where `dtexclusao` is null";
    $ret = selectMysql($sql);
    // varDump2($ret);
    return $ret;
}

function insertUsuario($dados){
    $sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `dtexclusao`, `idUsuarioExclusao`) VALUES (NULL, '".$dados['nome']."', '".$dados['email']."', '".md5($dados['senha1'])."', NULL, NULL)";
    varDump2($sql);
    return executarMysql($sql);
}

function buscaUsuarioEmail($email){
    $email = trim($email);
    $email = mb_strtolower($email, 'UTF-8');
    $sql = "SELECT * FROM `usuario` 
            where `usuario`.`dtexclusao` is null 
            and `usuario`.`email` = '".$email."'";
     varDump2($sql);
     varDump2(md5('neto@123'));
    return selectMysql($sql);
}