<?php
session_start();
require_once('topo.php');
include('navbar.php');
require_once('funcao.php');
conecta();
require_once('verifica_login.php');
?>

<h2 style="text-align:center">Olá, <?php echo $_SESSION['email']; ?></h2>



<div style="text-align:center">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="display-4">SEJA BEM VINDO</h2>
			<p class="lead"> <hr> </p>
		</div>
	</div>


	<link rel="stylesheet" type="text/css"  href="style.css" />
	<span class="imagem"></span>
	<br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
	
	<?php
	include('rodape.php');
	?>