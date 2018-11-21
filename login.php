<?php
session_start();
include('funcao.php');
conecta();

if(empty($_POST['email']) or empty($_POST['senha'])){
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "select id, email from login where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($connect, $query);
$row =  mysqli_num_rows( $result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>