	<head>
		<link rel="stylesheet" type="text/css" href="css/completo.css">
	</head>

<?php
        require "funcoes.php";


	if (empty($_POST)) {
	
		echo "<h1 class='text_logged'> Houve um erro e o cadastro de resenha não pode ser inicializado. </h1>";
		echo "<meta http-equiv='refresh' content='1.0;url=index.php' >";	

	}else{

        $mensagem = insereJogo();
        echo $mensagem;

        echo('<meta http-equiv="refresh" content="1.0;url=../index.php">');
    }
        

?>