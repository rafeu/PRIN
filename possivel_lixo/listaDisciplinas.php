<?php 
	include("index.php");
	include("disciplinas.php");
?>
	<article class="coluna80">
		<section class="lista">
			<h2 class="h1">Disciplinas</h2>
			<ul>	
<?php
	$lista = listaDisciplinas();

	foreach ($lista as $disciplina) {
		print('<li>'.$disciplina['nome'].'</li>');
	}

?>	

			</ul>
		</section>
	</article>

<?php
	include("rodape.php");
?>