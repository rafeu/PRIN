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

			<div class="h1Detalhe">
				<h1 class="titleMargin">Imagens</h1>
			</div>
		<section class="imgBackground">
				.
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
					<h4>Site</h4>
				</div>

				<div class="notaFinal">
					<h4><?= $info['site'] ?>%</h4>
				</div>

				</div>

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

			<div class="divider"></div>

			<div class="h1Detalhe">
					<h1 class="titleMarginAvaliacao">Avalie a Resenha</h1>
			</div>

			<section>
			
				<form  method="POST" action="" enctype="multipart/form-data">
					<div class="estrelas">
						<input type="radio" id="vazio" name="estrela" value="" checked>
							
						<label for="estrela_um"><i class="fa"></i></label>
						<input type="radio" id="estrela_um" name="estrela" value="1">
							
						<label for="estrela_dois"><i class="fa"></i></label>
						<input type="radio" id="estrela_dois" name="estrela" value="2">
							
						<label for="estrela_tres"><i class="fa"></i></label>
						<input type="radio" id="estrela_tres" name="estrela" value="3">
							
						<label for="estrela_quatro"><i class="fa"></i></label>
						<input type="radio" id="estrela_quatro" name="estrela" value="4">
							
						<label for="estrela_cinco"><i class="fa"></i></label>
						<input type="radio" id="estrela_cinco" name="estrela" value="5">
						<br><br>
							
						<input type="submit" value="Enviar nota!" class="submitNovaAvaliacao">
							
					</div>
				</form>

			</section>
		</div>
	</section>

<?php include "rodape.php"; ?>



