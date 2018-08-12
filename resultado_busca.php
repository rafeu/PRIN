<?php 

	require "menu.php";
	require "php/funcoes.php";


	if (empty(trim($_GET['campo_busca']))) {
		
      echo "<h1 class='text_logged'> Nenhum resultado encontrado </h1>";

      echo "<meta http-equiv='refresh' content='1000000.;url=index.php' >";

	}else{
?>

	<div class="resultadoBusca">
		<h3 class="tituloFontePesquisa">Resultado da busca por: "<?= $_GET['campo_busca'] ?>"</h3>
	</div>

<?php

		$jogos_encontrados = pesquisar();

		foreach ($jogos_encontrados as $jogo) {

?>

		<ul id="ul">
			<section class="centralizaJogo">

				<a href="jogo.php?cod=<?=$jogo['cod'] ?>"><img class="logoJogos" src="<?= $jogo['foto1'] ?>"></a>
			
				<div class="divider"></div>
			
				<li>
					<a class="link" href="jogo.php?cod=<?=$jogo['cod'] ?>" class="listaJG"> <?= $jogo['nome'] ?> </a>
				</li>
		
			</section>
		</ul>


<?php

		}
	}

?>

	<section id="indexSemNada"></section>

	<div class="divider"></div>

<?php

	include "rodape.php";

?>