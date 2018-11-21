<?php
include("topo.php");
include("navbar.php");
include ("funcao.php");
conecta();

$query = mysqli_query($connect, "SELECT * FROM tb_clientes ORDER BY id DESC");
?>
<h2 style="text-align: center">Lista de clientes</h2>
<table class="table table-striped">
    <tr>
        <td><strong> Nome</strong></td>
        <td><strong>CPF</strong></td>
        <td><strong>Telefone</srtong></td>
        <td><strong>E-mail</srtong></td>
        <td><strong>UF</srtong></td>
        <td><strong>Cidade</srtong></td>
        <td><strong>Numero da casa</srtong></td>
        <td><strong>CEP</srtong></td>
        <td><strong>Apagar dados</strong></td>
    </tr>    
<?php
while($registro = mysqli_fetch_array($query)){
?>
<tr>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["nome"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a> <?php echo $registro["cpf"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["telefone"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["email"]?></s></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["uf"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["cidade"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["numero"]?></a></td>
<td><a href="relatorio_cliente_detalhado.php?id=<?php echo $registro["id"]?>"> </a><?php echo $registro["cep"]?></a></td>
<td><a href="funcao.php?id=<?php echo $registro[$delete]['id'];?>">EXCLUIR</a></td>
</tr>
<?php } ?>
