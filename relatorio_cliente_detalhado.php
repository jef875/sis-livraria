<?php
include("funcao.php");
include("topo.php");

$id = $_GET["id"];
conecta();

$query = mysqli_query($connect, "SELECT * FROM tb_clientes WHERE id = '$id'");

$resultado  = mysqli_fetch_array($query);

echo $resultado["nome"];

?>