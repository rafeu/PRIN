<?php
	
	include("index.php");
	include("professores.php");

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);
?>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$professor['foto'] ?>" class="clicavel" id="img1">
		</section>

		<section class="moda1 escondido img1">

			<div class="coluna10">.</div>
			<div class="coluna10">.</div>
			<div class="coluna10">.</div>
			<div class="coluna5">.</div>
			<section class="fechar">X</section>
			<img src="<?=$professor['foto'] ?>" class="tamanho img1">
			
		</section>

		<section class="dados">
			<p>Nome: <?=$professor['nome'] ?></p>
			<p>Email: <?=$professor['email'] ?></p>
			<p>Disciplina: <?=$professor['disciplina'] ?></p>
			<p>Sala: <?=$professor['sala'] ?></p>

		</section>
	</article>

<?php
	include("rodape.php"); 	
?> 