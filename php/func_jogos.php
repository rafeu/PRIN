<?php

    function listaJogos(){
        $jogos = array();

        $dados = file("dados/jogos.csv");
        foreach ($dados as $posicao => $linha){

            if ($posicao != 0){	
                $colunas = explode(";", $linha);
                
                $jogo = array();
                $jogo['cod']        = $colunas[0];
                $jogo['categoria']  = $colunas[1];
                $jogo['nome']       = $colunas[2];

                $jogos[] = $jogo;
            }
        }
        return $jogos;
    }

    function listarCategorias(){
      $listaJogos = listaJogos();
      $listarCategorias = [];

      foreach ($listaJogos as $jogo) {
        $listarCategorias[] = $jogo['categoria'];
      }

      return $listarCategorias;

    }

    function buscaJogos ($cod){
        $jogo = array();	
    
        $dados = file("dados/jogos.csv");
        foreach ($dados as $linha) {
            
            $colunas = explode(";", $linha);

            if ($colunas[0] == $cod) {
                  $jogo['cod']        = $colunas[0];
                  $jogo['categoria']  = $colunas[1];
                  $jogo['nome']       = $colunas[2];
                  $jogo['descricao']  = $colunas[3];
                  $jogo['usuario']    = $colunas[4];
                  $jogo['steam']      = $colunas[5];
                  $jogo['foto1']      = $colunas[6];
                  $jogo['foto3']      = $colunas[7];
                  $jogo['foto2']      = $colunas[8];
            }
        }
        
        return $jogo;
    }
