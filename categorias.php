<?php 
	require "menu.php"; 
	include "php/funcoes.php";

	$catigurias = listarCategorias();

?>


<article>

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

				<a href="jogo.php?cod=<?=$jogo['cod'] ?>"><img class="logoJogos" src="<?= $jogo['foto1'] ?>"></a>
				<div class="divider">.</div>
				
					<li>
						<a href="jogo.php?cod=<?=$jogo['cod'] ?>" class="listaJG"> <?= $jogo['nome'] ?> </a>
					</li>

				<?php endforeach; ?>
			
			</ul>
		</div>
	</section>

	<div class="divider">.</div>	

	<?php $i++; endforeach; ?>

</article>

<?php
	include "rodape.php";
?>
