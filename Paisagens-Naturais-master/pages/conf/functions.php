<?php

function varDump2($varriable){
    echo "<pre>";
    var_dump($varriable);
    echo "</pre>";
}

function redireciona($url){
    echo "<script>";
    echo 'window.location.href = "'.$url.'"';
    echo "</script>";
}