<?php
@session_start();
//print_r($_SESSION);


if (empty($_SESSION)){
	$_SESSION['id_user'] = 0;
}
//print_r($_SESSION);
require "menu.php";
require "php/funcoes.php";

$info = $_GET['cod'];

$jogo = detalhaJogo($info);

$cod = $_GET['cod'];

$json = file_get_contents('dados/curtidas.json');
$lista_curtidas = json_decode($json, true);

$json = file_get_contents('dados/avaliacoes.json');
$lista_avaliacoes = json_decode($json, true);

$jogos_json  = file_get_contents('dados/jogos.json');
$jogos_array = json_decode($jogos_json, true);

$user_json  = file_get_contents('dados/usuarios.json');
$user_array = json_decode($user_json, true);


//inicio avaliações


// $quantidade_avaliacoes = 0;
// $soma_das_notas = 0;
// $media = 0;

// 	foreach ($lista_avaliacoes as $avaliacao){
//         if($avaliacao['id_jogo'] == $jogo['cod']){

//            $quantidade_avaliacoes++;

//            $soma_das_notas += $avaliacao['nota'];

//            $media = $soma_das_notas/$quantidade_avaliacoes;

//         }else{
//         	$media = 0;

//         }
// 	}





//inicio curtir



foreach ($jogos_array as $informacao){
        if($informacao['cod'] == $cod){
            $jogo_encontrado = $informacao;
        }
    }

//print_r($_POST);



    //Algoritmo para curtir
    if (isset($_POST['acao']) AND $_POST['acao'] == 'curtir'){

        $curtida = [ "resenha" =>  $cod, "usuario" => $_SESSION['id_user']];

        $lista_curtidas[] = $curtida;
        $json = json_encode($lista_curtidas, JSON_PRETTY_PRINT);
        file_put_contents("dados/curtidas.json", $json);
    }

    //Algoritmo para remover curtir
    if (isset($_POST['acao']) AND $_POST['acao'] == 'remover_curtir'){

        foreach ($lista_curtidas as $pos => $like){

            if ($like['usuario'] == $_SESSION['id_user'] AND $like['resenha'] ==  $cod ){
                unset($lista_curtidas[$pos]);
            }
        }

        $curtidas_json = json_encode($lista_curtidas, JSON_PRETTY_PRINT);
        file_put_contents("dados/curtidas.json", $curtidas_json);
    }


    //Algoritmo que percorre a lista de curtidas pra ver se esta postagem esta ou não curtida
    $esta_curtida = false;

    foreach ($lista_curtidas as $curtida){
        if ($curtida['resenha'] ==  $cod AND $curtida['usuario'] == $_SESSION['id_user'] ){
            $esta_curtida = true;
        }
    }





    //Algoritmo que calcula a média

    

    $contador = 0;
    $media = 0;

    foreach ($lista_avaliacoes as $avaliacao) {
    	if ($avaliacao['id_jogo'] == $cod) {
    		$media += $avaliacao['nota'];
    		$contador++;
    	}
    }

   $media_final = round( $media / $contador,2);








?>


	<section class="descricaoProj">

		<div class="titleDetalhe">

			<h1 class="titleMargin"><?= $jogo['nome'] ?></h1>
			<div class="divider">.</div>
			<h5 class="generoMargin"><?= $jogo['categoria']?></h5>
		</div>

		<div class="descDeta">
			<p class="titleMargin" style="font-size: 16px;"><?= $jogo['descricao'] ?></p>
		</div>

	</section>

	<div class="divider"></div>

			<div class="h1Detalhe">
				<h1 class="titleMargin">Imagens</h1>
			</div>
		<section class="imgBackground">
				.
				<img src="<?= $jogo['foto1'] ?>" class="imagemProj">
				<img src="<?= $jogo['foto2'] ?>" class="imagemProj">
				<img src="<?= $jogo['foto3'] ?>" class="imagemProj">
		</section>


	<div class="divider">.</div>

		<section>
			<div class="h1Detalhe">
				<h1 class="titleMargin">Indíce de aprovação</h1>
			</div>
			
			<div class="porcentualNota">

				<div class="nota">

				<div class="notaNome">
					<h4>Site</h4>
				</div>

				<div class="notaFinal">
					<h4><?= $jogo['site'] ?>%</h4>
				</div>

				</div>

				<div class="nota">

					<div class="notaNome">
						<h4>Usuários</h4>
					</div>

					<div class="notaFinal">
						<h4><?= $jogo['usuario'] ?>%</h4>
					</div>

				</div>

				<div class="nota">

					<div class="notaNome">
						<h4>Steam</h4>
					</div>

					<div class="notaFinal">
						<h4><?= $jogo['steam'] ?>%</h4>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<div class="h1Detalhe">
					<h1 class="titleMarginAvaliacao">Avalie a Resenha</h1>
			</div>

			<section>
			
				<form  method="post" action="estrelas.php" enctype="multipart/form-data">
					<div class="estrelas">
						<input type="radio" id="vazio" name="estrela" value="" checked>
							
						<label for="estrela_um"><i class="fa"></i></label>
						<input type="radio" id="estrela_um" name="estrela" value="1">
							
						<label for="estrela_dois"><i class="fa"></i></label>
						<input type="radio" id="estrela_dois" name="estrela" value="2">
							
						<label for="estrela_tres"><i class="fa"></i></label>
						<input type="radio" id="estrela_tres" name="estrela" value="3">
							
						<label for="estrela_quatro"><i class="fa"></i></label>
						<input type="radio" id="estrela_quatro" name="estrela" value="4">
							
						<label for="estrela_cinco"><i class="fa"></i></label>
						<input type="radio" id="estrela_cinco" name="estrela" value="5">
						<br><br>
					</div>

						<input type="hidden" name="cod" value="<?php echo $_GET['cod']?>">
							
						<input type="submit" value="Enviar nota!" class="submitNovaAvaliacao">

				</form>

				<form method="post" action="" enctype="multipart/form-data">	
                        <?php if($esta_curtida == true){ ?>

                            <section class="formCurtida">
                                <form method="post" action="?cod=<?= $_GET['cod']?>">
                                    <input type="hidden" name="acao" value="remover_curtir">
                                    <button style="width: 40%; background-color: transparent; border: none;cursor: pointer;"><img src="imagens/deslike.png" style="width: 100%;"></button>
                                </form>
                            </section>

                        <?php } else { ?>

                            <section class="formCurtida">
                                <form method="post" action="?cod=<?= $_GET['cod']?>" class="formCurtida">
                                   <input type="hidden" name="acao" value="curtir">
                                   <button style="width: 40%; background-color: transparent; border: none;cursor: pointer;"><img src="imagens/like.png" style="width: 100%;"></button>
                                </form>
                            </section>

                        <?php }?>

                    </div>
           		</form>

                <?= "<h3 class='generoMargin' style='color: white; margin-left: 3%;'> Média de avaliações: ". $media_final . "\n <h3>"; ?>

            </section>
            </div>
        </section>


	<div id="div_coment">

		<section id=section_coment>
			<h1 id="titleComent">Comentários</h1>
		</section>

				<hr id="hr_esquerda">
				<hr id="hr_direita">

		<section id="sessao_coment">

			<div class="divider">.</div>
				

				<section class="section_foto_user">
					<img src='imagens/comentario/rafcorr.jpg' class="user_img">
				</section>

					<h1 class="nome_meu_user_coment">Raf Corr</h1>

				<textarea id="meu_coment"></textarea>

			<div class="divider">.</div>
				
				<section class="section_foto_user">
					<div>			
						<img src='imagens/comentario/bacca.png' class="user_img">
						<a href="#"><img src='imagens/denunciar.png' class="iconzinhos"></a>
					</div>
					<div>
						<h1 class="nome_meu_user_coment">Bacca</h1>
						<p class="coment_outros">Adorei a resenha, realmente muito boa, esclareceu minha visão sobre o jogo. Continuem fazendo esse trabalho. :)</p>
					</div>
				</section>

				<section class="section_foto_user">
					<div>	
						<img src="imagens/comentario/rafcorr.jpg" class="user_img">
						<a href="#"><img src='imagens/editar.png' class="iconzinhos"></a>
						<a href="#"><img src='imagens/excluir.png' class="iconzinhos"></a>
					</div>
					<div>
						<h1 class="nome_meu_user_coment">Raf Corr</h1>
						<p class="coment_outros">A opcção de like é meio confusa :/</p>
					</div>
				</section>

				<section class="section_foto_user">
					<div>	
						<img src="imagens/comentario/berk.jpg" class="user_img">
						<a href="#"><img src='imagens/denunciar.png' class="iconzinhos"></a>
					</div>
					<div>
						<h1 class="nome_meu_user_coment">Berk</h1>
						<p class="coment_outros">Soh pah, ta mec fei XD</p>
					</div>
				</section>
				
		</section>

	</div>

<?php include "rodape.php"; ?>



