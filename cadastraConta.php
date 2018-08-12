<?php   
    require "menu.php";
    require "php/funcoes.php";
?>

	<section class="titulo">
		<h1 class="tituloFonte">Cadastro</h1>
	</section>

<section class="centralizaCadastroLogin">
    <div class="titleDetalhe">
        <form method="post" enctype="multipart/form-data" action="php/insereConta.php">

            <label for="nome" class="labelNovoUsuario">Nome:</label>
            <br>
            <input type="text" class="campoNovoUsuario login" name="nome" maxlength="25" autocomplete="off">

            <div class="divider"></div>

            <label for="categoria" class="labelNovoUsuario">Nome de Usuário:</label>
            <br>
            <input type="text" class="campoNovoUsuario login" name="nomeUser" maxlength="25" autocomplete="off">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">E-mail:</label>
            <br>
            <input type="email" class="campoNovoUsuario login" name="email" autocomplete="off">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario ">Senha:</label>
            <br>
            <input type="password" class="campoNovoUsuario login" name="senha" autocomplete="off">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">Confirmação de senha: </label>
            <br>
            <input type="password" class="campoNovoUsuario login" name="confirmaSenha" autocomplete="off">

            <div class="divider"></div>

            <label for="foto1" class="labelNovoUsuario">Foto:</label>
            <br>
            <input type="file" class="campoNovoUsuario" name="foto">

            <div class="divider"></div>

            <input type="submit" class="submitNovoUsuario">

        </form>
    </div>
</section>

<div class="divider"></div>

<?php   
    include "rodape.php";
?>