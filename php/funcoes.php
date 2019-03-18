<?php

  function insereUsuario(){

    $destino[] = insereImagem();

    $mensagem = "";

    $usuarios_json =  file_get_contents('../dados/usuarios.json');
    $atual = json_decode($usuarios_json, true);

    $novoUsuario = array(
          'nome' => $_POST['nome'],
          'nomeUser' => $_POST['nomeUser'],
          'email' => $_POST['email'],
          'senha' => $_POST['senha'],
          'foto1' => $destino[0][0], 
          );

    $atual[] = $novoUsuario;
    $final = json_encode($atual, JSON_PRETTY_PRINT);    

    if (file_put_contents('../dados/usuarios.json', $final)) {
      $mensagem = "<h1 class='text_logged'>Novo usuário cadastrado :D </h1>";
    } else{
      $mensagem = "<h1 class='text_logged'>Falha ao cadastrar usuário, tente novamente. </h1>";
    }

    return $mensagem;

  }





  function listaJogos(){

    $jogos_json = file_get_contents('dados/jogos.json');
    $jogos = json_decode($jogos_json, true);

    return $jogos;
  
  }



  function listaJogos2(){

    $jogos_json = file_get_contents('../dados/jogos.json');
    $jogos = json_decode($jogos_json, true);

    return $jogos;
  
  }



  function curtir($jogo){

    $curtidaAtual = false;

    $curtidas_json = file_get_contents('dados/curtidas.json');
    $curtidas = json_decode($curtidas_json, true);

    foreach ($curtidas as $curtida) {
      if ($curtida['resenha'] == "$jogo" AND $curtida['usuario'] == 1) {

        $curtidaAtual = true;
        $curtida['curtiu'] = $curtidaAtual;
        $json = json_encode($curtida, JSON_PRETTY_PRINT);
        file_put_contents("curtidas.json", $json);

      }
    }
  
  }



  function insereJogo(){

    $destino[] = insereImagem();

    $mensagem = "";

    $atual = listaJogos2();

    $novoJogo = array(
          'cod' => uniqid(),
          'nome' => $_POST['nome'],
          'categoria' => $_POST['categoria'],
          'descricao' => $_POST['descricao'],
          'site' => $_POST['site'],
          'usuario' => $_POST['usuario'],
          'steam' => $_POST['steam'],
          'foto1' => $destino[0][0],
          'foto2' => $destino[0][1],
          'foto3' => $destino[0][2], 
          );

    $atual[] = $novoJogo;
    $final = json_encode($atual, JSON_PRETTY_PRINT);    

    if (file_put_contents('../dados/jogos.json', $final)) {
      $mensagem = "Nova resenha cadastrada :D";
    } else{
      $mensagem = "Falha ao cadastrar resenha, tente novamente.";
    }

    return $mensagem;

  }







  function insereImagem(){

    $fotos = $_FILES;

    foreach($fotos as $foto){

      $i = 1;
      $destino = $i; 
      $destinoFinal = $i; 
      
      $origem = $foto['tmp_name']; 
      
      $$destino = '../imagens/'.$foto['name'];
      
      $final = move_uploaded_file($origem, $$destino);

      $$destinoFinal = 'imagens/'.$foto['name'];

      $i++;
    
      $destinoArray[] = $$destinoFinal;

    }

    return $destinoArray;

  }







  function listaJogosCategoria($categoria){
    $jogos = listaJogos();

    $selecionados = [];

    foreach ($jogos as $jogo) {
      if ($jogo['categoria'] == $categoria) {
        $selecionados[] = $jogo;
      }
    }

    return $selecionados;

  }







  function listarCategorias(){
    $jogos = listaJogos();
    $categorias = [];

    foreach ($jogos as $jogo) {
      $categorias[] = $jogo['categoria'];
    }

    return array_unique($categorias);

  }








  function detalhaJogo($cod){
    $jogos = listaJogos();

    $selecionados = [];

    foreach ($jogos as $jogo) {
      if ($jogo['cod'] == $cod) {
        $selecionados = $jogo;
      }
    }

    return $selecionados;

  }




  function buscaContas(){

    @$contas_json = file_get_contents('dados/usuarios.json');
    $contas = json_decode($contas_json, true);
    
    return $contas;
  }






  function pesquisar(){

    $jogos = listaJogos();

    $jogos_encontrados = []; 

    foreach ($jogos as $jogo) {

      $nome = strtolower($jogo['nome']);
      $categoria = strtolower($jogo['categoria']);
      $busca = trim(strtolower($_GET['campo_busca']));



      if (strpos($nome, $busca) !== false ) {

        $jogos_encontrados[] = $jogo;
      
      }
      if (strpos($categoria, $busca) !== false) {
        $jogos_encontrados[] = $jogo;
      }
    }


    return $jogos_encontrados;
  }