
<?php
	require "menu.php";
?>

<head>
  <meta charset="utf-8">




  <!--                                   CARROSSEL INÍCIO                                          -->



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="inicial">
		<div class="container carrossel">
  <h2 class="title_c">Novidades: </h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imagens/fortnite1.jpg" class="img_carrossel">
       	<div class="descJG">
       		<p class="tituloJG"><a href="">Fortnite:</a></p>

       		<p class="descricaoJG">Nova atualização adiciona um novo veículo um tanto quanto "diferente". Criador afirma que é importante a velocidade de locomoção dos jogadores durante o jogo, e que serão adicionados mais veículos futuramente... </p>

       		<p class="linkNoticia">Para acessar a notícia completa <a href="">clique aqui</a></p>
       	</div>
      </div>
    

      <div class="item">
        <img src="imagens/detroit1.jpg" class="img_carrossel">
		<div class="descJG">
       		<p class="tituloJG"><a href="">Detroit Become Human:</a></p>

       		<p class="descricaoJG">Finalmente lançado, o jogo já se tornou um sucesso estando nos temas mais procurados atualmente no Youtube, com mais de 3 milhões de pesquisas de acordo com dados recentes... </p>

       		<p class="linkNoticia">Para acessar a notícia completa <a href="">clique aqui</a></p>
       	</div>
      </div>
    
      <div class="item">
        <img src="imagens/godofwar1.jpg" class="img_carrossel">
       	<div class="descJG">
       		<p class="tituloJG"><a href="">God of War:</a></p>

       		<p class="descricaoJG">Jogadores reclamam da imensa perda gráfica que o jogo sofreu após o lançamento, porém os desenvolvedores respondem: "isso ocorreu para o melhor desempenho no console" disse o desenvolvedor de efeitos visuais Marcus Riddicky...</p>

       		<p class="linkNoticia">Para acessar a notícia completa <a href="">clique aqui</a></p>
       	</div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	</section>

	
	<!--                                   CARROSSEL FIM                                        -->

<?php include("rodape.php"); ?>
</body>

