<?php   
    require "menu.php";
    require "php/funcoes.php";
?>

	<section class="titulo">
		<h1 class="tituloFonte">Cadastrar Resenhas</h1>
	</section>

<section class="centralizaCadastroResenha">
    <div class="titleDetalhe">
        <form method="post" enctype="multipart/form-data" action="php/insereResenha.php">

            <label for="nome" class="labelNovaResenha">Nome</label>
            <br>
            <input type="text" class="campoNovaResenha" name="nome">

            <div class="divider"></div>

            <label for="categoria" class="labelNovaResenha">Categoria</label>
            <br>
            <input type="text" class="campoNovaResenha" name="categoria">

            <div class="divider"></div>

            <label for="cod" class="labelNovaResenha">Código</label>
            <br>
            <input type="text" class="campoNovaResenha" name="cod">

            <div class="divider"></div>

            <label for="descricao" class="labelNovaResenha">Descrição</label>
            <br>
            <textarea class="descricao" name="descricao"></textarea>

            <div class="divider"></div>

            <label for="usuario" class="labelNovaResenha">Nota do<br />Usuário</label>
            <div class="divider"></div>
            <input type="text" class="campoNovaResenha" name="usuario">

            <div class="divider"></div>

            <label for="steam" class="labelNovaResenha">Nota da<br />Steam</label>
            <div class="divider"></div>
            <input type="text" class="campoNovaResenha" name="steam">

            <div class="divider"></div>

            <label for="foto1" class="labelNovaResenha">Foto</label>
            <br>
            <input type="file" class="campoNovaResenha" name="foto1">

            <div class="divider"></div>

            <label for="foto2" class="labelNovaResenha">Foto</label>
            <br>
            <input type="file" class="campoNovaResenha" name="foto2">

            <div class="divider"></div>

            <label for="foto3" class="labelNovaResenha">Foto</label>
            <br>
            <input type="file" class="campoNovaResenha" name="foto3">

            <div class="divider"></div>

            <input type="submit" class="submitNovaResenha">

        </form>
    </div>
</section>

<div class="divider"></div>

<?php   
    include "rodape.php";
?>