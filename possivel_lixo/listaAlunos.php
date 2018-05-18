<?php
	
	include("index.php");
	include("alunos.php");

?>
	<!-- conteudo principal -->
	<article class="coluna80">
<?php

		
?>		

	<div class="coluna10">.</div>
	<div class="coluna10">.</div>
	<div class="coluna10">.</div>
	<div class="coluna3">.</div>

	<section>
		<h1 class="h1 menujs" id="menu1">1info1</h1>
	</section>


	<section>
		<h1 class="h2 menujs" id="menu2">1info2</h1>
	</section>	


	<section>
 		<h1 class="h2 menujs" id="menu3">1info3</h1>
	</section>



	<div class="divider"></div>



	<section class="lista2">
		<ul class="lista">
<?php

	$lista = listaAlunosTurma('1info1');
	foreach ($lista as $aluno) {

?>
		<section class="conteudo menu1 escondido">
			<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>"><?=$aluno['nome'] ?><a></li>
		</section>

<?php

	}
	
?>
		</ul>
	</section>	


<!-- ////////////////////////////////////////////////// -->


	<section class="lista2">
		<ul class="lista">
<?php

	$lista = listaAlunosTurma('1info2');
	foreach ($lista as $aluno) {

?>

		<section class="conteudo menu2 escondido">
			<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>"><?=$aluno['nome'] ?><a></li>
		</section>
	
<?php

	}

?>

		</ul>
	</section>	


<!-- ////////////////////////////////////////////////// -->


	<section class="lista2">
		<ul class="lista">
<?php

	$lista = listaAlunosTurma('1info3');
	foreach ($lista as $aluno) {

?>

		<section class="conteudo menu3 escondido">
			<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>"><?=$aluno['nome'] ?><a></li>
		</section>
		
	<?php

	}

?>

		</ul>
	</section>	
	</article>

<!-- ////////////////////////////////////////////////// -->


<?php
	include("rodape.php"); 	
?> 