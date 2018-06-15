<?php

  function insereUsuario(){

    $destino[] = insereImagem();

    $mensagem = "";

    $usuarios_json =  file_get_contents('../dados/usuarios.json');
    $atual = json_decode($usuarios_json, true);

    $novoUsuario = array(
          'nome' => $_POST['nome'],
          'nomeUsuario' => $_POST['nomeUsuar'],
          'email' => $_POST['email'],
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
    $jogos_json =  file_get_contents('dados/jogos.json');
    $jogos = json_decode($jogos_json, true);

    return $jogos;

  }





  function insereJogo(){

    $destino[] = insereImagem();

    $mensagem = "";

    $jogos_json =  file_get_contents('../dados/jogos.json');
    $atual = json_decode($jogos_json, true);

    $novoJogo = array(
          'cod' => $_POST['cod'],
          'nome' => $_POST['nome'],
          'categoria' => $_POST['categoria'],
          'descricao' => $_POST['descricao'],
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