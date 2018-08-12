<?php 
	require "menu.php"; 
	require "php/funcoes.php";

	$catigurias = listarCategorias();

?>


<article>

	<section class="titulo">
		<h1 class="tituloFonte">Categorias</h1>
	</section>

	<?php 
		
		$i = 1;
		
		foreach($catigurias as $categoria):
		
	?>

	<section class="item itemCategoria dropdown<?= $i ?>" id="mydrop">
		<h1 class="nomeCategoria"><?= $categoria ?></h1>
		<div class="drpdwn<?= $i ?> mydrop escondido">
		
			<ul id="ul">
				<?php 
				$jogosDaCategoria = listaJogosCategoria($categoria);
				foreach ($jogosDaCategoria as $jogo):?>
				
				<section class="centralizaJogo">

				<a href="jogo.php?cod=<?=$jogo['cod'] ?>"><img class="logoJogos" src="<?= $jogo['foto1'] ?>"></a>
				<div class="divider"></div>
				
				<li>
					<a class="link" href="jogo.php?cod=<?=$jogo['cod'] ?>" class="listaJG"> <?= $jogo['nome'] ?> </a>
				</li>

				</section>

				<?php endforeach; ?>
			
			</ul>
		</div>
	</section>	

	<div class="divider">.</div>

	<?php $i++; endforeach; ?>

	<div class="divider">.</div>

</article>

<?php
	include "rodape.php";
?>
