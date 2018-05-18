<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script_tab.js"></script>
	<script type="text/javascript" src="js/script_dropdown.js"></script>
	<script type="text/javascript" src="js/script_modal.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<meta charset="utf-8">
	<title>Polar</title>
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<a href="index.php"><img src="imagens/logoPolar.png" id="logo"/></a>

<?php

///////////////////////////////CONFIRMA SE ESTÁ LOGADO///////////////////////////////


	if ( isset($_SESSION['login']) ) { //SE ESTIVER LOGADO
	
?>

		<div class="divider">.</div>

		<!-- MENSAGEM QUANDO LOGADO -->
		<section class="login_area">
			<div class="user">
				<p> Usuário: <?= $_SESSION['nome'] ?></p>
			</div>
			<div class="logout">
				<a href="publico/logout.php">Sair</a>
			</div> 
		</section>
		<!-- MENSAGEM QUANDO LOGADO -->

<?php
	}else{ //SE NAO ESTIVER LOGADO 
 ?>


		<!-- F O R M  DE  L O G I N -->
		<div id="perfil">
		<form method="post" action="publico/login.php">
		
			<label for="login">Login</label>
			<input class="login" type="text" name="login">
			<br>
			<label for="senha">Senha</label>
			<input class="senha" type="password" name="senha">
			<br>
		<input type="submit" name="enviar">
	</form>
		</div>
		<!-- F O R M  DE  L O G I N -->

<?php

	 }


///////////////////////////////CONFIRMA SE ESTÁ LOGADO///////////////////////////////

?>


	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href="index.php"><section class="itemMenu">Home</section></a>
		<a href="categorias.php"><section class="itemMenu">Categorias</section></a>
		<a href="#"><section class="itemMenu">Novidades</section></a>
		<a href="#"><section class="itemMenu">#</section></a>
		<a href="#"><section class="itemMenu">#</section></a>
		<input class="pesquisa" type="search">

		<div class="divider"></div>

		<div class="coluna10">.</div>
		<div class="coluna10">.</div>
		<div class="coluna10">.</div>
		<div class="coluna3">.</div>

	</nav>
	
	<div class='divider'></div>
