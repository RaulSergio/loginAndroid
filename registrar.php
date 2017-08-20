<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlValida = $dbcon->query("SELECT * FROM tblogin WHERE email='$email'");

if(mysqli_num_rows($sqlValida)>0){
    echo "Erro no Email";
}else{
    //echo "deu certo";
    $sqlRegistra = $dbcon->query("INSERT INTO tblogin(nome, email, senha) VALUES('$nome','$email','$senha')");

    if($sqlRegistra){
        echo "Usuario Registrado";
    }else{
        echo "Erro no Registro do Usuário";
    }
}


?>