<?php   
    require "menu.php";
    require "php/funcoes.php";
?>

<section class="centralizaCadastroResenha">
    <div class="titleDetalhe">
        <form method="post" enctype="multipart/form-data" action="php/insereConta.php">

            <label for="nome" class="labelNovoUsuario">Nome</label>
            <input type="text" id="nomeNovoUsuario" name="nome">

            <div class="divider"></div>

            <label for="categoria" class="labelNovoUsuario">Nome de Usuário</label>
            <input type="text" id="categoriaNovoUsuario" name="nomeUser">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">E-mail</label>
            <input type="text" id="codNovoUsuario" name="email">

            <div class="divider"></div>

            <label for="foto1" class="labelNovaResenha">Foto</label>
            <input type="file" class="fotoNovoUsuario" name="foto">

            <input type="submit" id="submitNovaResenha">

        </form>
    </div>
</section>

<?php   
    include "rodape.php";
?>