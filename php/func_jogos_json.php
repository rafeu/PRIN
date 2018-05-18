<?php


  function listaJogos(){
    $jogos_json =  file_get_contents('dados/jogos.json');
    $jogos = json_decode($jogos_json, true);

    return $jogos;

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
        $selecionados[] = $jogo;
      }
    }

    return $selecionados;

  }