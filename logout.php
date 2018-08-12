<?php 

	//inicia a sessao
	session_start();

	//destrói a sessao
	session_destroy();

	//redireciona para a pagina do formulario de login
	echo "<meta http-equiv='refresh' content='0;url=index.php' >";

?>