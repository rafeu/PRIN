<?php


	if (empty($_POST)) {

		echo('<meta http-equiv="refresh" content="0;url=listaProfessores.php">');

	}else{
		
		$origem = $_FILES['foto']['tmp_name'];

		$destino = 'imagens/professores/'.$_FILES['foto']['name'];
		move_uploaded_file($origem, $destino);


		$siape = $_POST['siape'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$disciplina = $_POST['disciplina'];
		$sala = $_POST['sala'];
		$foto = $destino;


		//linha que será escrita no arquivo csv
		$linha = "\n".$siape.",".$nome.",".$email.",".$disciplina.",".$sala.",".$foto;

		//abre o arquivo que será escrito
		$arquivo = fopen("dados/professores.csv", "a+");

		//escreve no arquivo ($arquivo) o que será escrito ($linha)
		fwrite($arquivo, $linha);

		//fecha e salva o arquivo
		fclose($arquivo);

		echo('<meta http-equiv="refresh" content="0;url=listaProfessores.php">');
	}
?>