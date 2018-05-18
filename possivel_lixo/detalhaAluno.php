<?php
	
	include("index.php");
	include("alunos.php");

	$matricula = $_GET['cod'];

	$aluno = buscaAlunos($matricula);
?>
	<article class="coluna80">
		<section class="dados">	
			<div>
				<p>Nome: <?=$aluno['nome'] ?></p>
				<p>Email: <?=$aluno['email'] ?></p>
			</div> 
		</section>	
	</article>

<?php
	include("rodape.php"); 	
?>