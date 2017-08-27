<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpfCnpj= $_POST['cpfCnpj'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$obs = $_POST['obs'];

$sqlValida = $dbcon->query("SELECT * FROM cliente WHERE cpfCnpj='$cpfCnpj'");

if(mysqli_num_rows($sqlValida)>0){
echo "cpf/cnpj_erro";
}else{
//echo "deu certo";
$sqlRegistra = $dbcon->query("INSERT INTO cliente(nome, telefone, cpfCnpj, email, endereco, numero, cidade, obs) VALUES('$nome','$telefone','$cpfCnpj','$email','$endereco','$numero','$cidade','$obs')");

if($sqlRegistra){
echo "registro_ok";
}else{
echo "Erro no Registro do Usuário";
}
}


?>