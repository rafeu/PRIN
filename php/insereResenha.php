<?php


	if (empty($_POST)) {

		echo('<meta http-equiv="refresh" content="0;url=../index.php">');

	}else{
		
        $origem1 = $_FILES['foto1']['tmp_name'];
        $origem2 = $_FILES['foto2']['tmp_name'];
        $origem3 = $_FILES['foto3']['tmp_name'];

		$destino1 = 'imagens/jogos/'.$_FILES['foto1']['name'];
        move_uploaded_file($origem1, $destino1);
        
        $destino2 = 'imagens/jogos/'.$_FILES['foto2']['name'];
        move_uploaded_file($origem2, $destino2);
        
        $destino3 = 'imagens/jogos/'.$_FILES['foto3']['name'];
		move_uploaded_file($origem4, $destino3);


		$cod = $_POST['cod'];
		$nome = $_POST['nome'];
		$categoria = $_POST['email'];
		$descricao = $_POST['descricao'];
        $usuario = $_POST['usuario'];
        $steam = $_POST['steam'];
        $foto1 = $destino1;
        $foto2 = $destino2;
        $foto3 = $destino3;


		//linha que será escrita no arquivo csv
		$linha = ',{
                "cod": " .$cod. " ,
                "nome": ".$nome.",
                "categoria": ".$categoria.",
                "descricao": ".$descricao.",
                "usuario": ".$usuario.",
                "steam": ".$steam.", 
                "foto1": ".$destino1.",
                "foto2": ".$destino2.",
                "foto3": ".$destino3."
                }';  

		//abre o arquivo que será escrito
		$arquivo = fopen("dados/jogos.json", "a+");

		//escreve no arquivo ($arquivo) o que será escrito ($linha)
		fwrite($arquivo, $linha);

		//fecha e salva o arquivo
		fclose($arquivo);

		echo('<meta http-equiv="refresh" content="0;url=../categorias.php">');
	}
?>