<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Criando site em PHP </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div id="geral">
	<div id="topo">
		<?php
		include 'topo.php';
		?>
	</div>
	<div id="menu">
		<?php
		include 'menu.php';
    	?>
	</div>
	<div id="conteudo">
<body style="background-color: #008B8B;">

<div id="box_form">
	<h1 class="titulos" style="font-size: 40px">Cadastre-Se</h1>
	<form action="cadastro.php" method="POST" enctype="multipart/form-data">
		<input type="texto" name="nome" class="campos_cad" placeholder="NOME">
		<input type="email" name="email" class="campos_cad" placeholder="EMAIL">
		<input type="password" name="senha" class="campos_cad" placeholder="SENHA">
		<input type="password" name="repetesenha" class="campos_cad" placeholder="REPETIR SENHA">
		<input type="texto" name="lembrete" class="campos_cad" placeholder="LEMBRETE">
		<input type="file" name="foto" class="campos_cad">
					<!-- formatação dos botoes -->
	<div id="botoes">
		<input type="submit" value="CADASTRAR" class="bt_cad">
		<input type="reset" value="LIMPAR" class="bt_cad">

	</div>


	</form>
	<div class="botoes">
	<a href="index.php" class="form_link">&larr;VOLTAR PARA PAGINA PRINCIPAL</a>
	<p class="p_form">Já Possui cadastro?  Então click no link abaixo para login</p>
	<a href="login.php" class="form_link">LOGAR</a>
	</div>


</div>
</div>
	<div id="rodape">
	    <?php
		include 'rodape.php';
		?>
	</div>
</div>  <!-- fim da div geral -->
</body>
</html>