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
	<title>Site Trabalho</title>
	<link rel="stylesheet" type="text/css" href="../css/completo.css">
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>

<?php

	//isset() - verifica se uma variável está definida 
	if ( isset($_SESSION['login']) ) { //SE ESTIVER LOGADO
	
?>

		<!-- MENSAGEM QUANDO LOGADO -->
			<p class="perfil">Usuário: Administrador</p>
			<a id="perfil" href="publico/logout.php">Sair</a>
		<!-- MENSAGEM QUANDO LOGADO -->

<?php
	}else{ //SE NAO ESTIVER LOGADO 
 ?>


		<!-- F O R M  DE  L O G I N -->
		<div id="perfil">
		<form method="post" action="login.php">
		
			<label class="nomelogin" for="login">Login</label>
			<input class="login" type="text" name="login">
			<br>
			<label class="nomelogin" for="senha">Senha</label>
			<input class="senha" type="password" name="senha">
			<br>
		<input type="submit" name="enviar">
	</form>
		</div>
		<!-- F O R M  DE  L O G I N -->

<?php
	}
?>

	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Home</section></a>
		<a href="listaDisciplinas.php"><section class="item menu">Fórum</section></a>
		<section class="item menu dropdown" id="mydrop">Categorias</section>	
		<a href=""><section class="item menu">Melhores Notas</section></a>
		<a href="listaProfessores.php"><section class="item menu">Resenhas</section></a>
		<a href="listaAlunos.php"><section class="item menu">Sobre</section></a>

		<div class="divider"></div>

		<div class="coluna10">.</div>
		<div class="coluna10">.</div>
		<div class="coluna10">.</div>
		<div class="coluna3">.</div>



			<div class="drpdwn mydrop escondido">
				<ul id="ul">
					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna3">.</div>
					<li><a class="opcoescategoria" href="jogos/gtav.php">Ação</a></li>

					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna3">.</div>
					<li><a class="opcoescategoria" href="ofertas1info2.php">Aventura</a></li>

					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna10">.</div>
					<div class="coluna3">.</div>
					<li><a class="opcoescategoria" href="ofertas1info3.php">Terror</a></li>
				</ul>
			</div>
		</section>

	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>

	<section class="div"></section>


	<section class="DescricaoProj">

		<section class="TitleDetalhe">
			Grand Theft Auto V
		</section>
		<section class="DescDeta">
			Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo dos EUA e a indústria do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro.

	Grand Theft Auto V para PC oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los Santos e Blaine County em resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60 FPS (quadros por segundo).

	O jogo oferece uma ampla seleção de opções de personalização específicas para o PC, com mais de 25 configurações separadas para qualidade de textura, sombreamentos, suavização de bordas e muito mais. Além disso, ele contém diversas opções de personalização dos controles de mouse e teclado. Entre as opções adicionais estão a densidade da população, o controle do tráfego de carros e pedestres, suporte para dois ou três monitores, compatibilidade com telas 3D e suporte para controle plug-and-play.
		</section>

		<a href="http://store.steampowered.com/app/271590/Grand_Theft_Auto_V/">
		<input type="button" value="VISITE O SITE" name="button" class="BotaoDetalhes">
		</a>
