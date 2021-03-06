<?php 
	
	session_start();

	if (!empty(@$_SESSION['login'])) {
	
	require "menu.php"; 
	include "php/funcoes.php";

	$catigurias = listarCategorias();

?>


<article>
	<section class="titulo">
		<h1 class="tituloFonte">Minhas Resenhas</h1>
	</section>

	<?php 
		
		$i= 1;
		
		foreach($catigurias as $categoria):
		
	?>
	<section class="item itemCategoria dropdown<?= $i ?>" id="mydrop">
		<h1 class="nomeCategoria"><?= $categoria ?></h1>
		<div class="drpdwn<?= $i ?> mydrop escondido">
			


			<ul id="ul">
				<?php 
				$jogosDaCategoria = listaJogosCategoria($categoria);
				foreach ($jogosDaCategoria as $jogo):?>

				<li>
					<a href="jogo.php?cod=<?=$jogo['cod'] ?>" class="listaMR"> <?= $jogo['nome'] ?> </a>
					
					<section class="eav">
						<a href=""><img src="imagens/excluir.png" class="iconzinhos"></a>
						<a href=""><img src="imagens/editar.png" class="iconzinhos"></a>
						<a href="jogo.php?cod=<?=$jogo['cod'] ?>"><img src="imagens/visualizar.png" class="iconzinhos"></a>
					</section>
				</li>

				<div class="divider"></div>

				<?php endforeach; ?>
			
			</ul>
		</div>
	</section>

	<div class="divider">.</div>	

	<?php $i++; endforeach; ?>
		<div class="divider">.</div>
		<article>
			<section id="cadastrar" >
				<a href="cadastraResenha.php">Deseja cadastrar uma nova resenha? Clique aqui.</a>
			</section>
		</article>

<?php
	include "rodape.php";
	}else{ 
?>

	<head>
		<link rel="stylesheet" type="text/css" href="css/completo.css">
	</head>

	<?php
	
		echo "<h1 class='text_logged'> Você precisa estar logado para acessar essa página. </h1>";
		echo "<meta http-equiv='refresh' content='1.5;url=index.php' >";	

	} 

	?>

</article>


