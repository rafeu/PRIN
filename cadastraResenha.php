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
            <input type="text" class="campoNovoUsuario login" name="nome" autocomplete="off">

                <div class="divider"></div>

            <label for="categoria" class="labelNovaResenha">Categoria</label>
            <br>
            <input type="text" class="campoNovoUsuario login" name="categoria" autocomplete="off">

                <div class="divider"></div>

            <label for="descricao" class="labelNovaResenha">Descrição</label>
                <br>
            <textarea class="descricao login" name="descricao" autocomplete="off"></textarea>

            <div class="divider"></div>

            <label for="usuario" class="labelNovaResenha">Nota do<br />Usuário</label>
                <div class="divider"></div>
            <input type="number" class="campoNovoUsuario login" name="usuario" min="0" max="100" autocomplete="off">

            <div class="divider"></div>

            <label for="usuario" class="labelNovaResenha">Nota do<br />Site</label>
                <div class="divider"></div>
            <input type="number" class="campoNovoUsuario login" name="site" min="0" max="100" autocomplete="off">

            <div class="divider"></div>

            <label for="steam" class="labelNovaResenha">Nota da<br />Steam</label>
                <div class="divider"></div>
            <input type="number" class="campoNovoUsuario login" name="steam" min="0" max="100"   autocomplete="off">

            <div class="divider"></div>

            <label for="foto1" class="labelNovaResenha">Foto</label>
                <br>
            <input type="file" class="campoNovoUsuario fotoUpload" name="foto1">

            <div class="divider"></div>


            aaaaaa quero ler :v

            <label for="foto2" class="labelNovaResenha">Foto</label>
                <br>
            <input type="file" class="campoNovoUsuario fotoUpload" name="foto2">

            <div class="divider"></div>

            <label for="foto3" class="labelNovaResenha">Foto</label>
                <br>
            <input type="file" class="campoNovoUsuario fotoUpload" name="foto3">

            <input type="hidden" name="pasta" value="false">
                <div class="divider"></div>

            <input type="submit" class="submitNovoUsuario">

        </form>
    </div>
</section>

<div class="divider"></div>

<?php   
    include "rodape.php";
?>