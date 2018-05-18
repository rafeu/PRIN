 <?php
 //disciplinas.php - Funções para acesso aos dados de Disciplinas e Oferta//



 //retorna um array com todas as disciplinas
 function listaDisciplinas(){
 	$disciplinas = array();

 //abre o arquivo e retorna seu conteudo em um array
 	$dados = file("dados/disciplinas.csv");
 	foreach ($dados as $posicao => $linha) {
 		if ($posicao != 0) {

	 		$colunas = explode(",", $linha);

	 		$disciplina = array();
	 		$disciplina['codigo'] = $colunas[0];
	 		$disciplina['nome']   = $colunas[1];

	 		$disciplinas[] = $disciplina;
	 	}
	 }

	 return $disciplinas;
}

	// //teste
	// $teste = listaDisciplinas();
	// print_r($teste);




 //retorna um array com os dados de uma disciplina
 function buscaDisciplina($codigo){
 	$disciplina = array();

 	$dados = file("dados/disciplinas.csv");

 	foreach ($dados as $linha) {
 		$colunas = explode(",", $linha);
 		if ($colunas[0] == $codigo) {
 			$disciplina['codigo'] = $colunas[0];
 			$disciplina['nome'] = $colunas[1];	
 		}
 	}

 	return $disciplina;
 }

	// //teste
	// $teste = buscaDisciplina(12);
	// print_r($teste);


 //retorna um array com todas as disciplinas daquela turma naquele ano
 function listaOfertas($ano, $turma){
 	$alunos = array();

	$dados = file("dados/ofertas.csv");
	foreach ($dados as $posicao => $linha){

		if ($posicao != 0){	
			$colunas = explode(",", $linha);
			if ($colunas[1] == $turma) {
				$aluno = array();
				$aluno['ano'] = $colunas[0];
				$aluno['turma']  = $colunas[1];
				$aluno['cod_disciplina'] = $colunas[2];
				$aluno['cod_professor']  = $colunas[3]; 
				$alunos[] = $aluno;
			}
		}
	}
	return $alunos;
}
 
 	// //teste
	// $teste = listaOfertas(2017, "1info1");
	// print_r($teste);

 ?>