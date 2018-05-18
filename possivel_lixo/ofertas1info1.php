<?php
	
	include("index.php");
	include("disciplinas.php");
	include("professores.php");

?>
	<!-- conteudo principal -->
	<article class="coluna80">

<div class="coluna10">.</div>
<div class="coluna10">.</div>
<div class="coluna10">.</div>

		<section class="lista4">
		<h1 class="h1">1info1</h1>
			<ul>
<?php

		$lista = listaOfertas(2017,'1info1');
		foreach ($lista as $oferta) {
			$disc = buscaDisciplina($oferta['cod_disciplina']);
			$prof = buscaProfessor($oferta['cod_professor']);


		print("<li>".$disc['nome']." - ". $prof['nome'] . "</li>");
?>

	
<?php

	}

?>

			</ul>
		</section>	
	</article>

<?php
	include("rodape.php"); 	
?>  