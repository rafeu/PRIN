<?php
session_start();

$cod = $_POST['cod'];

if (isset($_POST['estrela'])){

		$avaliacoes_json = file_get_contents('dados/avaliacoes.json');
        $avaliacoes_array = json_decode($avaliacoes_json, true);

      	
        $avaliacao= [ "id_jogo" =>  $cod, "usuario" => $_SESSION['id_user'], "nota" => $_POST['estrela']];

        $avaliacoes_array[] = $avaliacao;
        $avaliacoes_array = json_encode($avaliacoes_array, JSON_PRETTY_PRINT);
        file_put_contents("dados/avaliacoes.json", $avaliacoes_array);
    	}
    

  

echo "<meta http-equiv='refresh' content='0.;url=jogo.php?cod=$cod'>";