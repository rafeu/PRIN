<?php
	//iniciar SESSION
	session_start();
	if ($_SESSION['login'] == 'aluno') {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restrito - Aluno</title>
</head>
<body>
	<h2>Página de Acesso Restrito - Aluno</h2>
	<a href="logout.php">Sair</a>
	<p>Nesta página você pode modificar somente algumas configurações do sistema.</p>
</body>
</html>
<?php
	}else{
		echo "Acesso negado!";
		
		//redireciona para a página do formulário de login
		echo "<meta http-equiv='refresh' content='1.5;url=publico.php' >";
	}

?>