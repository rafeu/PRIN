<?php
        require "func_jogos_json.php";
echo "<pre>";

	if (empty($_POST)) {

		echo('<meta http-equiv="refresh" content="0;url=../index.php">');

	}else{



        $mensagem = insereJogo();
        echo $mensagem;

        }
        
echo "</pre>";

?>