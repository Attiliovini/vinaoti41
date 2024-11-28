<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Criando site em PHP </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


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

	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="imagens/postagem.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="imagens/postagem.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="imagens/postagem.jpg	" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

</div>  <!-- fim da div geral -->
</body>
</html>