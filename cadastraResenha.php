<?php   
    require "menu.php";
    require "php/funcoes.php";
?>

<section class="centralizaCadastroResenha">
    <div class="resenhaDetalhe">
        <form method="post" enctype="multipart/form-data" action="php/insereResenha.php">

            <label for="nome" class="labelNovaResenha">Nome</label>
            <input type="text" id="nomeNovaResenha" name="nome">

            <div class="divider"></div>

            <label for="categoria" class="labelNovaResenha">Categoria</label>
            <input type="text" id="categoriaNovaResenha" name="categoria">

            <div class="divider"></div>

            <label for="cod" class="labelNovaResenha">Código</label>
            <input type="text" id="codNovaResenha" name="cod">

            <div class="divider"></div>

            <label for="descricao" class="labelNovaResenha">Descrição</label>
            <textarea id="descricao" name="descricao"></textarea>

            <div class="divider"></div>

            <label for="usuario" class="labelNovaResenha">Nota do<br />Usuário</label>
            <input type="text" class="notaNovaResenha" name="usuario">

            <div class="divider"></div>

            <label for="steam" class="labelNovaResenha">Nota da<br />Steam</label>
            <input type="text" class="notaNovaResenha" name="steam">

            <div class="divider"></div>

            <label for="foto1" class="labelNovaResenha">Foto</label>
            <input type="file" class="fotoNovaResenha" name="foto1">

            <div class="divider"></div>

            <label for="foto2" class="labelNovaResenha">Foto</label>
            <input type="file" class="fotoNovaResenha" name="foto2">

            <div class="divider"></div>

            <label for="foto3" class="labelNovaResenha">Foto</label>
            <input type="file" class="fotoNovaResenha" name="foto3">

            <div class="divider"></div>

            <input type="submit" id="submitNovaResenha">

        </form>
    </div>
</section>

<?php   
    include "rodape.php";
?>