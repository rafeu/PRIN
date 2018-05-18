<?php
	
	include("../menu.php");
?>

	<!-- conteudo principal -->
	<article class="coluna80">
		
	<section class="lista">
		<h2 class="h1">Professores</h2>
		<ul>

<?php
	include("professores.php");

	$lista = listaProfessores();

	foreach ($lista as $professor) {
?>
	
	<li><a href="detalhaProfessor.php?cod=<?=$professor['siape'] ?>"><?=$professor['nome'] ?><a></li>

<?php

	}

?>

		</ul>

<?php
	if (isset($_SESSION['login'])) {
		echo "<a href='formProfessor.php' class='h1'>Inserir novo professor</a>";
	 } 
?>

	</section>
		
	</article>


<?php

	include("rodape.php"); 	
?> 