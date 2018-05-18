<?php
	//iniciar SESSION
	session_start();
	if ($_SESSION['login'] == 'admin') {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restrito - Administrador</title>
</head>
<body>
	<h2>Página de Acesso Restrito - Administrador</h2>
	<a href="logout.php">Sair</a>
	<p>Nesta página você pode alterar as configurações do sistema.</p>
</body>
</html>
<?php
	}else{
		echo "Acesso negado!";
		
		//redireciona para a página do formulário de login
		echo "<meta http-equiv='refresh' content='1.5;url=publico.php' >";
	}

?>