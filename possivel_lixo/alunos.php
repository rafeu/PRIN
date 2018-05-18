<?php

//arquivo com funções para manipulação dos dados de alunos





//////////////////////////////////////////////////////////////////
//                   B U S C A    A L U N O S                  //
////////////////////////////////////////////////////////////////


function buscaAlunos ($codigo){
	$aluno = array();	

	$dados = file("dados/alunos.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
		if ($colunas[0] == $codigo) {
			  $aluno['matricula'] = $colunas[0];
			  $aluno['nome']      = $colunas[1];
			  $aluno['turma']     = $colunas[2];
			  $aluno['email']     = $colunas[3];
		}
	}
	return $aluno;
}


//////////////////////////////////////////////////////////////////
//                  L I S T A    A L U N O S                   //
////////////////////////////////////////////////////////////////

function listaAlunos(){
	$alunos = array();

	$dados = file("dados/alunos.csv");
	foreach ($dados as $posicao => $linha){

		if ($posicao != 0){	
			$colunas = explode(",", $linha);
			
			$aluno = array();
			$aluno['matricula'] = $colunas[0];
			$aluno['nome']  = $colunas[1];
			$aluno['turma'] = $colunas[2];
			$aluno['email']  = $colunas[3]; 
			$alunos[] = $aluno;
		}
	}
	return $alunos;
}


//////////////////////////////////////////////////////////////////
//                  L I S T A    T U R M A S                   //
////////////////////////////////////////////////////////////////


function listaTurmas(){
	$turmas = array();

	$dados = file("dados/alunos.csv");
	foreach ($dados as $posicao => $linha){

		if ($posicao != 0){	
			$colunas = explode(",", $linha);
			
			$turma = $colunas[2];
			if(!in_array($turma, $turmas)){
				  $turmas[] = $turma;
			}
		}
	}
	return $turmas;
}

// $a = listaTurmas();
// print_r($a);

function listaAlunosTurma($turma){
	$alunos = array();

	$dados = file("dados/alunos.csv");
	foreach ($dados as $posicao => $linha) {
		if ($posicao != 0) {
			$colunas = explode(",", $linha);
			if ($colunas[2] == $turma) {
				$aluno = array();
				$aluno['matricula'] = $colunas[0];
				$aluno['nome'] = $colunas[1];
				$aluno['turma'] = $colunas[2];
				$aluno['email'] = $colunas[3];
				$aluno['foto'] = $colunas[4];

				$alunos[] = $aluno;
			}
		}
	}

	return $alunos;	
}
	
//	$lista = listaAlunosTurma('1info1');
//	print_r($lista);
?>