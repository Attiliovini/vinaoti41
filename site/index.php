<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Criando site em PHP </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">




</head>
<body style="height: 10000000px;">
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
		<?php
		include 'conteudo_index.php';
    	?>
	</div>
	<div id="rodape">
	    <?php
		include 'rodape.php';
		?>
	</div>


</div>  <!-- fim da div geral -->
</body>
</html>