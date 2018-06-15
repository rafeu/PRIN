
<head>
	<link rel="stylesheet" type="text/css" href="../css/completo.css">
</head>
<body id="body_login">
<?php
	session_start();


	//capturando os valores que vieram pelo POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//se usuario informado for 'admin' e senha informada for 'admin'

	if ($login == 'admin' and $senha == 'admin') {
		
		//gravar as informações na SESSION
		$_SESSION['nome'] = 'Administrador';
		$_SESSION['login'] = 'admin';

		echo '<h1 class="text_logged"> Olá, '. $_SESSION["nome"] . '!</h1>';
		
		//redireciona para a página de acesso restrito de ADM
		echo "<meta http-equiv='refresh' content='1.;url=../index.php' >";

	}elseif($login =='aluno' and $senha =='aluno'){
	 	//gravar as informações na SESSION
	 	$_SESSION['nome'] = 'Aluno';
		$_SESSION['login'] = 'aluno';

		echo '<h1 class="text_logged"> Olá, '. $_SESSION["nome"] . '!</h1>';

	 	//redireciona para a página de acesso restrito de ALUNO
	 	echo "<meta http-equiv='refresh' content='1.;url=../index.php' >";

	}else{
		echo "<h1 class='text_logged'> Dados inválidos </h1>";
		//redireciona para a página do formulário de login
		echo "<meta http-equiv='refresh' content='1.;url=../index.php' >";
	}
	?>
</body>