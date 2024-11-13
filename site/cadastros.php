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
			include 'menu.php'
				?>
		</div>
		<div id="conteudo">
			<!-- Trazendo os usuários do banco de dados -->
			<h3> Cadastro de usuários</h3>
			<?php
			include 'connect.php'; /*Conexão com Banco de dados */
			$sql = "SELECT `id`, `nome`, `email`, `senha`, `lembrete`, `foto` FROM `cadastro` WHERE 1"; /* Trazendo informações gerais do banco */
			$resultado = mysqli_query($link, $sql); /*Executando a T-SQL */
			$html = "<table border=1><tr><td>Nome</td><td>Email</td><td>Foto</td><td>Açoes</td></tr>";
			foreach ($resultado as $valor) { /* Fazendo o loop para verificar o resultado*/

				$html .= "<tr><td>" . $valor['nome'] . "</td><td>" . $valor['email'] . "</td><td>" . $valor['foto'] . "</td><td><a href='http://localhost/vinaoti41/site/form_cadastro.php?id=" . $valor['id'] . "'>Editar</a> /<span onclick='deletar(".$valor['id'].")'>Deletar</span></td><tr>";
				/* var_dump($valor);*/
			}
			$html .= "</table>";
			echo $html;

			?>
		</div>
		<div id="rodape">
			<?php
			include 'rodape.php'
				?>
		</div>
	</div> <!-- fim da div geral -->
</body>

</html>