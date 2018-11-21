<?php
//session_start();
function conecta(){
global $connect;

// Conexão com banco de dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "id7526677_sistema";

	$connect = mysqli_connect($servername, $username, $password, $db_name) or die(" Não foi possível se conectar ao servidor");

	if(mysqli_connect_error()){
		echo "Falha na conexão: ".mysqli_connect_error();
	}
	
}
function form($label, $nome_campo, $coluna, $text, $maximo){
	echo '
	<div class="form-group col-md-'.$coluna.'">
	<label>'.$label.'</label>
    <input class="form-control" type="'.$text.'" name="'.$nome_campo.'" maxlength="'.$maximo.'" required><br>
	</div>';	
} 
?>