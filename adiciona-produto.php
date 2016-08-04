<?php include 'cabecalho.php';
	  include('conecta.php');
	  include('banco-produto.php');



$nome = $_POST["nome"];
$preco= $_POST["preco"];
$descricao= $_POST["descricao"];
	
	
if (insereProduto ($conexao, $nome, $preco, $descricao) and ($nome != '') && ($descricao != '')){
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
