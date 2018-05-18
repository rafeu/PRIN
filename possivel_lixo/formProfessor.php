<?php
	include("index.php");
?>
	
	<article class="coluna80">

<?php
	if (isset($_SESSION['login'])){
?>
		<section class="lista">
			<form method="post" action="insereProfessor.php" enctype="multipart/form-data">
				<h2 class="h2">Inserção de professores</h2>

				<label class="lista3" for="siape">SIAPE</label>
				<input type="text" name="siape">

				<div class="divider"></div>

				<label class="lista3"  for="nome">Nome</label>
				<input type="text" name="nome">

				<div class="divider"></div>

				<label class="lista3"  for="email">E-mail</label>
				<input type="text" name="email">

				<div class="divider"></div>

				<label class="lista3"  for="disciplina">Disciplina</label>
				<input type="text" name="disciplina">

				<div class="divider"></div>

				<label class="lista3"  for="sala">Sala</label>
				<input type="text" name="sala">

				<div class="divider"></div>

				<label class="lista3"  for="foto">Foto</label>
				<input type="file" name="foto">

				<div class="divider"></div>

				<input class="lista3" type="submit" name="enviar">
			</form> 
		</section>

<?php
	}else{
		echo('<meta http-equiv="refresh" content="0;url=listaProfessores.php">');
	}
?>
	</article>
<?php
	include("rodape.php");
?>
