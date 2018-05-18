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
		 		<h1 class="h1">1info3</h1>
				<ul>
<?php

		$lista = listaOfertas(2017,'1info3');
		foreach ($lista as $oferta) {
			$prof = buscaProfessor($oferta['cod_professor']);
			$disc = buscaDisciplina($oferta['cod_disciplina']);

		print("<li>".$disc['nome']." - ". $prof['nome'] . "</li>");

		}

?>

			</ul>
		</section>	
	</article>

<?php
	include("rodape.php"); 	
?>  