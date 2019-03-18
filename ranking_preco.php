<?php
	require "menu.php"; 
	require "php/funcoes.php";
?>

<article>

		<section class="titulo">
			<h1 class="tituloFonte">Ranking de Jogos por Preço</h1>
		</section>

	<section style="margin-left: 30%;">
		<ul id="ul">
			
<?php 

    $curtidas_json  = file_get_contents('dados/curtidas.json');
    $curtidas_array = json_decode($curtidas_json, true); 

    $jogos_json  = file_get_contents('dados/jogos.json');
	$jogos_array = json_decode($jogos_json, true);


  
	$pos_rank = 1;

	foreach ($jogos_array as $jogo) {
		
	

?>
			
			<div class="h1Detalhe">
				<h1 class="titleMargin"><?= $pos_rank ?>°</h1>
			</div>

			<section class="centralizaJogo" style="width: 24%;">

			<a href="jogo.php?cod=<?=$nome ?>"><img class="logoJogos" style="width: 200%;" src="<?= $jogo['foto1'] ?>"></a>
			<div class="divider"></div>
			
			<li id="Rank-lista" style="float:left; width: 200%;">
				<a class="link" href="jogo.php?cod=<?=$jogo['cod'] ?>" class="listaJG"> <?= $jogo['nome'] ?> </a>
			</li>
				<p style="float:right; margin-right: -10%;" class="link"><?=$jogo['preco'] ?></p>


			</section>

			<div class="divider"></div>

<?php 
        $pos_rank++;
    } 
?>
		
		</ul>
	</section>

</article>