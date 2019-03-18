<?php

function criaPasta(){
  $listaJogos = listaJogos('');

  foreach ($listaJogos as $jogo => $itens ) {
   foreach ($listaJogos[$jogo] as $item => $valor) {
     if ($valor == 'false') {
        @mkdir("imagens/".$itens['categoria']);
        @mkdir("imagens/".$itens['categoria']."/".$itens['cod']);

      }
    }
  }

}




 function editarTF(){
       
     $jogos = listaJogos();

         foreach ($jogos as $jogo){
             if ($jogo['cod'] == $_GET['cod']){
               
                 $jogo['pasta'] = 'true';
               
                 break;
             }
         }

         foreach ($jogos as $pos => $jogo) {
             if ($_POST["campo_numero"] == $contato['number']) {
               
                 $jogos[$pos]['name'] = $_POST['nome_editar'];
                 $jogos[$pos]['email'] = $_POST['email_editar'];
               
                 break;
             }

     $json = json_encode($jogoContato, JSON_PRETTY_PRINT);
     file_put_contents('jogos.json', $json);

     echo "<meta http-equiv='refresh' content='0.1.;url=index.php' >";

 }

         $jogos = listaJogos('');

         foreach ($jogos as $jogo){
             if ($jogo['pasta'] == 'false'){
               
                 $jogo['pasta'] = 'true';
               
                 break;
             }
         }



         foreach ($jogosJson as $pos => $contato) {
             if ($_POST["cod"] == $contato['cod']) {
               
                 $jogosJson[$pos]['pasta'] = 'true';
               
                 break;
             }

         }

     $json = json_encode($jogoContato, JSON_PRETTY_PRINT);
     file_put_contents('jogos.json', $json);

     echo "<meta http-equiv='refresh' content='0.1.;url=index.php' >";
     
     }

