<?php
	@session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script_tab.js"></script>
	<script type="text/javascript" src="js/script_dropdown.js"></script>
	<script type="text/javascript" src="js/script_modal.js"></script>
	<link rel="icon" href="imagens/icon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> <!-- Estrela de avaliação -->

	<meta charset="utf-8">
	<title>Polar</title>
</head>
<body>

	<!-- menu -->
	
	<nav id="navMenu">
		<a href="index.php"><img src="imagens/logoPolar.png" id="logo"/></a>

		<section id="marginMenu">
		<a href="index.php"><section class="itemMenu">Home</section></a>
		<a href="categorias.php"><section class="itemMenu">Categorias</section></a>
		<a href="ranking.php"><section class="itemMenu">Ranking de Curtidas</section></a>
		<a href="ranking_editores.php"><section class="itemMenu">Ranking de Editores</section></a>
		<a href="ranking_preco.php"><section class="itemMenu">Ranking de Jogos p/ preço</section></a>
		<a href="minhasResenhas.php"><section class="itemMenu">Minhas Resenhas</section></a>



		<form action="resultado_busca.php">

			<input class="pesquisa" name="campo_busca" type="search" autocomplete="off" placeholder="Pesquisar...">
			<input class="submitPesquisa" value="Buscar" type="submit" name="busca">
				
		</form>

<?php

///////////////////////////////CONFIRMA SE ESTÁ LOGADO///////////////////////////////


	if ( isset($_SESSION['login']) ) { //SE ESTIVER LOGADO
	
?>

		<section class="login_area">
			<div class="user">
				<p><?= $_SESSION['nome'] ?></p>
			</div>
			<div class="logout">
				<a href="logout.php">Sair</a>
			</div> 
		</section>

<?php
	}else{ //SE NAO ESTIVER LOGADO 

 ?>

 		<section class="login_area" id="cadastraLoga">
	 		<a href="cadastraConta.php" class="logarCadastrar">Cadastrar</a>
	 		<a href="logar.php" class="logarCadastrar">Logar</a>
	 	</section>

<?php

	 }


///////////////////////////////CONFIRMA SE ESTÁ LOGADO///////////////////////////////

?>
		
		</section>

	</nav>
	

