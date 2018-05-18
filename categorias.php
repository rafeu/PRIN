<?php 
	require "menu.php"; 
	include "php/func_jogos_json.php";

	$catigurias = listarCategorias();

?>


<article>

	<?php foreach($catigurias as $categoria): ?>
	<section class="item itemCategoria1 dropdown" id="mydrop">
		<h1 class="nomeCategoria"><?= $categoria ?></h1>
		<div class="drpdwn mydrop escondido">
			


			<ul id="ul">
				<?php 
				$jogosDaCategoria = listaJogosCategoria($categoria);
				foreach ($jogosDaCategoria as $jogo):?>



					<li><a href="jogo.php?cod=<?=$jogo['cod'] ?>"> <?= $jogo['nome'] ?> </a></li>

				<?php endforeach; ?>

			</ul>
		</div>
	</section>
	<?php endforeach; 
	if(@ $_SESSION['login']=="admin"){
	?>
	<div class="divider">.</div>
	<article>
		<section id="cadastrar" >
			<a href="cadastraResenha.php">Deseja cadastrar uma nova resenha? Clique aqui.</a>
		</section>
	</article>
	<?php } ?>

</article>

<?php
	include "rodape.php";
?>
