<?php
        require "funcoes.php";


	if (empty($_POST)) {

                echo "Houve um erro e o cadastro de resenha não pode ser inicializado.";
                echo('<meta http-equiv="refresh" content="1.5;url=../index.php">');

	}else{

                $mensagem = insereUsuario();
                echo $mensagem;

                echo('<meta http-equiv="refresh" content="1.5;url=../index.php">');
        }
        

?>