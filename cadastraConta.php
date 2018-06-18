<?php   
    require "menu.php";
    require "php/funcoes.php";
?>

	<section class="titulo">
		<h1 class="tituloFonte">Cadastro</h1>
	</section>

<section class="centralizaCadastroResenha">
    <div class="titleDetalhe">
        <form method="post" enctype="multipart/form-data" action="php/insereConta.php">

            <label for="nome" class="labelNovoUsuario">Nome completo:</label>
            <br>
            <input type="text" class="campoNovoUsuario" name="nome">

            <div class="divider"></div>

            <label for="categoria" class="labelNovoUsuario">Nome de Usuário:</label>
            <br>
            <input type="text" class="campoNovoUsuario" name="nomeUser">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">E-mail:</label>
            <br>
            <input type="text" class="campoNovoUsuario" name="email">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">Senha:</label>
            <br>
            <input type="text" class="campoNovoUsuario" name="senha">

            <div class="divider"></div>

            <label for="cod" class="labelNovoUsuario">Confirmação de senha: </label>
            <br>
            <input type="text" class="campoNovoUsuario" name="verificaSenha">

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