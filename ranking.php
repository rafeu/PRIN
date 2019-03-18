<?php
	require "menu.php"; 
	require "php/funcoes.php";
?>

<article>

		<section class="titulo">
			<h1 class="tituloFonte">Ranking de Curtidas</h1>
		</section>

	<section style="margin-left: 30%;">
		<ul id="ul">
			
<?php 

    $curtidas_json  = file_get_contents('dados/curtidas.json');
    $curtidas_array = json_decode($curtidas_json, true); 

    $jogos_json  = file_get_contents('dados/jogos.json');
	$jogos_array = json_decode($jogos_json, true);


    //Algoritmo que conta quantas curtidas cada jogo teve
    foreach ($jogos_array as $pos){

		 $ranking[$pos['cod']] = 0;
    }

    foreach ($curtidas_array as $curtida) {
      
        foreach ($ranking as $jogo => $valor){
         
         		
           	if ($jogo == $curtida['resenha']) {
           	
            $ranking[$jogo] += 1;
               
			}
		}
	}

    
    $ordenado = arsort($ranking);

$pos_rank = 1;

	foreach ($ranking as $nome => $likes) {

		foreach ($jogos_array as $jogo => $valor ) {
			if ($valor['cod'] == $nome) {
				$nome_do_jogo = $valor['nome'];
				$imagem = $valor['foto1'];
			}

		}

?>
			
			<div class="h1Detalhe">
				<h1 class="titleMargin"><?= $pos_rank ?>°</h1>
			</div>

			<section class="centralizaJogo" style="width: 24%;">

			<a href="jogo.php?cod=<?=$nome ?>"><img class="logoJogos" style="width: 200%;" src="<?= $imagem ?>"></a>
			<div class="divider"></div>
			
			<li id="Rank-lista" style="float:left; width: 200%;">
				<a class="link" href="jogo.php?cod=<?=$nome ?>" class="listaJG"> <?= $nome_do_jogo ?> </a>
			</li>
				<p style="float:right; margin-right: -10%;" class="link"> <?= $likes ?> curtidas</p>


			</section>

			<div class="divider"></div>

<?php 
        $pos_rank++;
    } 
?>
		
		</ul>
	</section>

</article>