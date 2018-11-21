<?php
session_start();
include("verifica_login.php");
include ("topo.php");
include ("funcao.php");
include ("navbar.php");
?>


<div style="text-align: center">
	<h1> Cadastro de produtos</h1>
</div>
<form name="form1" method="POST" action="script_produto.php">
	
	<div class="form-group">
		<div class="form-row">

			<?php 
			form("Categoria", "categoria", 3, "text", 20);
			form("Título do livro", "titulo_livro", 3, "text", 20);
			form("Autor", "autor", 3, "text", 20);
			form("Ano da edição","ano_edicao", 3, "date", 20);
			form("Editora","editora", 3, "text", 20);
			form("Preço", "preco", 2, "text", 20);
			form("Observações","observacoes", 3, "text", 30);
			
			?>
		</div>
		<div class="form-goup col-md-4">
			<div>
				<button style="text-align: center" type="submit" class="btn btn-secondary btn-lg btn-block">ENVIA
				</button>
			</div>
		</div>
	</div>