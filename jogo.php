<?php
	// session_start();
	require "menu.php";
	require "php/func_jogos_json.php";

	$jogo = $_GET['cod'];

	$info = detalhaJogo($jogo);


?>

	<div class="coluna10">.</div>

	<div class="coluna10">.</div>

	<section class="descricaoProj">

		<div class="titleDetalhe">
			<h1 class="titleMargin"><?= $info[0]['nome'] ?></h1>
			<div class="divider">.</div>
			<h5 class="generoMargin"><?= $info[0]['categoria']?></h5>
		</div>

		<div class="descDeta">
			<p class="titleMargin"><?= $info[0]['descricao'] ?></p>
		</div>

	</section>

	<div class="divider"></div>

		<section>
			<div class="h1Detalhe">
				<h1 class="titleMargin">Imagens</h1>
			</div>
				<img src="<?= $info[0]['foto1'] ?>" class="imagemProj">
				<img src="<?= $info[0]['foto2'] ?>" class="imagemProj">
				<img src="<?= $info[0]['foto3'] ?>" class="imagemProj">
		</section>


	<div class="divider">.</div>

		<section>
			<div class="h1Detalhe">
				<h1 class="titleMargin">Indíce de aprovação</h1>
			</div>
			
			<div class="porcentualNota">

				<div class="nota">

					<div class="notaNome">
						<h4>Usuários</h4>
					</div>

					<div class="notaFinal">
						<h4><?= $info[0]['usuario'] ?>%</h4>
					</div>

				</div>

				<div class="nota">

					<div class="notaNome">
						<h4>Steam</h4>
					</div>

					<div class="notaFinal">
						<h4><?= $info[0]['steam'] ?>%</h4>
					</div>
				</div>
				</div>
			</div>
	</section>



