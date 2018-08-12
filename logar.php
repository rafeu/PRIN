<?php 
	require "menu.php";
?>

<section class="titulo">
	<h1 class="tituloFonte">Login</h1>
</section>

<div class="divider"></div>

<section class="centralizaCadastroLogin">
	<div class="LoginDetalhe">
		<form method="post" enctype="multipart/form-data" action="login.php">
		
			<label for="login" class="labelLogin">Login</label>
			<div class="divider"></div>
			<input class="campoLogin login" type="text" name="login" autocomplete="off">
			<br>

			<label for="senha" class="labelLogin">Senha</label>
			<div class="divider"></div>
			<input class="campoLogin login" type="password" name="senha" autocomplete="off">
			<br>
			
			<input type="submit" name="enviar" class="submitLogin">
		</form>
	<article>
		<section id="cadastrarLogin" >
			<a href="cadastraConta.php">Ainda não tem uma conta?</a>
			<a href="#" id="naoTemSenha">Esqueceu sua senha?</a>
		</section>
	</article>
	</div>
</section>