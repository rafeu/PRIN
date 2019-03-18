<?php 
	require "menu.php";
?>

<section class="titulo">
	<h1 class="tituloFonte">Recuperação de senha</h1>
</section>

<div class="divider"></div>

<section class="centralizaCadastroLogin">
	<div class="LoginDetalhe">
		<form method="post" enctype="multipart/form-data" action="login.php">
		
			<label for="login" class="labelLogin">Email</label>
			<div class="divider"></div>
			<input class="campoLogin login" type="text" name="login" autocomplete="off">
			<br>

			<input type="submit" name="enviar" class="submitLogin">
		</form>
	<article>
		<section id="cadastrarLogin" >
			<h1 id="eviaremos_email">Enviaremos um email para você com a requisição de troca de senha.</h1>
		</section>
	</article>
	</div>
</section>