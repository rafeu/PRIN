<?php
	// session_start();
	require "menu.php";
	require "php/funcoes.php";

	$jogo = $_GET['cod'];

	$info = detalhaJogo($jogo);


?>


	<section class="descricaoProj">

		<div class="titleDetalhe">
			<h1 class="titleMargin"><?= $info['nome'] ?></h1>
			<div class="divider">.</div>
			<h5 class="generoMargin"><?= $info['categoria']?></h5>
		</div>

		<div class="descDeta">
			<p class="titleMargin" style="font-size: 16px;"><?= $info['descricao'] ?></p>
		</div>

	</section>

	<div class="divider"></div>

		<section>
			<div class="h1Detalhe">
				<h1 class="titleMargin">Imagens</h1>
			</div>
				<img src="<?= $info['foto1'] ?>" class="imagemProj">
				<img src="<?= $info['foto2'] ?>" class="imagemProj">
				<img src="<?= $info['foto3'] ?>" class="imagemProj">
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
						<h4><?= $info['usuario'] ?>%</h4>
					</div>

				</div>

				<div class="nota">

					<div class="notaNome">
						<h4>Steam</h4>
					</div>

					<div class="notaFinal">
						<h4><?= $info['steam'] ?>%</h4>
					</div>
				</div>
				</div>
			</div>
	</section>



