<?php
include ("funcao.php");
conecta();
$preco = addslashes($_POST["preco"]);
$categoria = addslashes(strtolower($_POST["categoria"])); 
$titulo_livro = addslashes(strtolower($_POST["titulo_livro"]));
$autor = addslashes(strtolower($_POST["autor"]));
$ano_edicao = addslashes($_POST["ano_edicao"]);
$editora = addslashes(strtolower($_POST["editora"]));
$observacoes = addslashes(strtolower($_POST["observacoes"]));
//$autor = strtolower($autor); converte toda a palávra em minusculo
$categoria = ucwords($categoria);
$titulo_livro = ucwords($titulo_livro);
$autor = ucwords("$autor"); // converte a primeira letra em maiusculo
$editora = ucwords($editora);
$observacoes = ucwords($observacoes);

number_format($preco, 2, ".", ",");
$preco = str_replace(",", ".", $preco);

$query = mysqli_query($connect, "INSERT INTO produtos(preco, categoria, titulo_livro, autor, ano_edicao, editora, observacoes)

	VALUES('$preco', '$categoria', '$titulo_livro', '$autor', '$ano_edicao', '$editora', '$observacoes')");
	
	header("location: form_produtos.php");
	exit();
	?>