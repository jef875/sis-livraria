<?php
session_start();
include("funcao.php");
conecta();

// Recebendo os dados do formulario html

$nome = addslashes(strtolower($_POST["nome"]));
$numero = addslashes($_POST["numero"]);
$cep = addslashes($_POST["cep"]);
$cidade = addslashes(strtolower($_POST["cidade"]));
$uf = addslashes(strtoupper($_POST["uf"]));
$telefone = addslashes($_POST["telefone"]);
$email = addslashes(strtolower($_POST["email"]));
$cpf = addslashes($_POST["cpf"]);

$nome = ucwords($nome);
$cidade = ucwords($cidade);

if (strlen($uf)== 2) {

	$query = mysqli_query($connect, "INSERT INTO tb_clientes (nome, numero, cep, cidade, uf, telefone, email, cpf) VALUES  ('$nome', '$numero','$cep','$cidade', '$uf', '$telefone', '$email','$cpf' )");
}else{
	echo "UF inválido";
}
	header("location: form_cliente.php");
	exit();
?>