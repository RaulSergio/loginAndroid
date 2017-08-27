<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdlogin";

$dbcon = new mysqli("$host","$usuario","$senha","$banco");

if($dbcon->connect_error){
    echo "Erro de Conexão";
}else{
    echo "Conexão OK";
}

mysqli_query($dbcon,"SET NAMES UTF8");
?>