<?php

function conectaMysql(){
    //echo '<pre>Entrou no conectaMysql</pre>';
    $host     = 'localhost';
    $user     = 'user';
    $pass     = 'neto@123';
    $banco    = 'francatur';
    //Open a new connection to the MySQL server
    // $mysqli = new mysqli($host,$user,$pass,$banco);
    $conn = mysqli_connect($host, $user, $pass, $banco);
    //Output any connection error
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
        return $conn;
    }
}

function selectMysql($sql){
    if($sql==""){
        varDump2('Script vazio');
        exit();
    } else {
        $conn = conectaMysql();
        $resultado = mysqli_query($conn, $sql);
        $results = array();
        while($result = mysqli_fetch_assoc($resultado)){
            $results[] = $result;
        }
        mysqli_free_result($resultado);
        mysqli_close($conn);
        // varDump2($retorno);

        if (empty($results) || is_null($results) || 
            (count($results)==1 && is_null($results[0])) ){
            return false;
        } else {
            return $results;
        }
    }
}


function executarMysql($sql){
    //echo '<pre>Entrou no ExecutarMysql</pre>';
    if($sql=="") {
        varDump2('Script vazio');
    } else  {
        // exibeMensagem('Script valido');
        $conn = conectaMysql();
        if ($conn->query($sql) === true) {
            return true;
        } else {
            varDump2("Mysql Error: " . $conn->error);
            return false;
        }
    }
}

?>