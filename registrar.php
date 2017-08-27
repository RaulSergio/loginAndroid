<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

$sqlValida = $dbcon->query("SELECT * FROM tblogin WHERE email='$email'");

if(mysqli_num_rows($sqlValida)>0){
    echo "email_erro";
}else{
    //echo "deu certo";
    $sqlRegistra = $dbcon->query("INSERT INTO tblogin(nome, email, senha, confirmaSenha) VALUES('$nome','$email','$senha','$confirmaSenha')");

    if($sqlRegistra){
        echo "registro_ok";
    }else{
        echo "Erro no Registro do Usuário";
    }
}


?>