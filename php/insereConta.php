<head>
	<link rel="stylesheet" type="text/css" href="../css/completo.css">
</head>
<body id="body_login">
<?php
        require "funcoes.php";


	if (empty($_POST['nome'] || $_POST['nomeUser'] || $_POST['senha'])) {

                echo "<h1 class='text_logged'>Houve um erro e o cadastro da conta não pôde ser realizado.</h1>";
                echo('<meta http-equiv="refresh" content="1.5;url=../cadastraConta.php">');

	}elseif($_POST['senha'] != $_POST['confirmaSenha']) {

                echo "<h1 class='text_logged'>Houve um erro: as senhas digitadas não são iguais.</h1>";
                echo('<meta http-equiv="refresh" content="2.0;url=../cadastraConta.php">');
        }else{

                $mensagem = insereUsuario();
                echo $mensagem;

                echo('<meta http-equiv="refresh" content="1.5;url=../index.php">');
        }
        

?>