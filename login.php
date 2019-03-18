
<head>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<title>Polar</title>
</head>
<body id="body_login">
<?php

	session_start();


	$invalid = true;
	include "php/funcoes.php";

	$contas = buscaContas();

	//capturando os valores que vieram pelo POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];


for ($i=0; $i < sizeof($contas); $i++) { 
	if ($login == $contas[$i]['nomeUser'] and $senha == $contas[$i]['senha']) {

		//gravar as informações na SESSION
		$_SESSION['nome'] = $contas[$i]['nome'];
		$_SESSION['login'] = $contas[$i]['nomeUser'];
		@$_SESSION['id_user'] = $contas[$i]['id_user'];

		echo '<h1 class="text_logged"> Olá, '. $_SESSION["nome"] . '!</h1>';

		//redireciona para a página de acesso restrito de ADM
		echo "<meta http-equiv='refresh' content='1.5;url=index.php' >";

		$invalid = false;
	}
}

	if($invalid){
		echo "<h1 class='text_logged'> Dados inválidos </h1>";
		//redireciona para a página do formulário de login
		echo "<meta http-equiv='refresh' content='1.5.;url=logar.php' >";
	}
	?>
</body>