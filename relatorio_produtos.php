<?php
include("topo.php");
include("navbar.php");
include ("funcao.php");
conecta();

$query = mysqli_query($connect, "SELECT * FROM produtos ORDER BY id DESC");

?>
<h2 style="text-align: center">Lista de Produtos</h2>
<table class="table table-striped">
    <tr>
        <td><strong>Titulo do livro</strong></td>
        <td><strong>Autor</strong></td>
        <td><strong>Preço</strong></td>
        <td><strong>Categoria</strong></strong></td>
        <td><strong>Ano da edição</strong></td>
        <td><strong>Editora</strong></td>
        <td><strong>Observações</strong></td>
        <td><strong>Apagar dados</strong></td>

    </tr>    
</p>                         
<?php

while($registro = mysqli_fetch_array($query)){
    
?>

<tr>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["titulo_livro"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["autor"]?></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["preco"]?></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["categoria"]?></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["ano_edicao"]?></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["editora"]?></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["observacoes"]?></td>

<td><a href="funcao.php?id=<?php echo $registro[$delete]['id'];?>">EXCLUIR</a></td>

</tr>
<?php } 

?>