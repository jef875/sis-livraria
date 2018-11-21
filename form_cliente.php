<?php
session_start();
include("verifica_login.php");
include("topo.php"); 
include("funcao.php");
include("navbar.php");
conecta();
?>

<div style="text-align: center">
	<h1> Cadastro de clientes</h1>
</div>


<form name="form1" class="form-group" method="POST" action="script_cliente.php"
style="text-align: center">
    
    
<div class="form-row" style="text-align: center">

	<?php
	form("Nome", "nome", 3, "text", 20);
	form("Numero da casa", "numero", 3, "number", 10);
	form("CEP", "cep", 3, "text", 9);
	form("Cidade", "cidade", 3, "text", 20);
	form("UF", "uf", 3, "text", 2);
	form("CPF", "cpf", 3, "cpf-mask", 14);
	form("Telefone", "telefone", 3, "text", 15);
	form("E-mail", "email", 3, "email", 25);
	?>

	<div>
		<button style="text-align: center" type="submit" class="btn btn-secondary btn-lg btn-block">ENVIAR</button>
	</div>
</div>
