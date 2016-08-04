<?php include 'cabecalho.php';?>
<?php
function insereProduto ($conexao, $nome, $preco)	
{
	$query = "insert into loja.produtos (nome, preco) values ('{$nome}', {$preco})";
	return mysqli_query($conexao,$query);	
}

$nome = $_GET["nome"];
$preco= $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');
	
	
if (insereProduto ($conexao, $nome, $preco) and ($nome != '')){
	?>
	<p class="text-success">
		Produto <?= $nome; ?>, adicionado com sucesso!
		Preço: R$ <?= $preco; ?>
	</p>
	<?php
}else{
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">
		Produto <?= $nome; ?> não foi adicionado: <? $msg; ?>
	</p>
<?php 
}
mysqli_close($conexao);
?>
<?php include 'rodape.php';?>