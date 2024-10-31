<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Criando Seu Primeiro Site Em Php</title>
</head>
<body>
    <div class="geral">
        <div class="topo">
            <?php
                include 'topo.php';
            ?>
        </div>
        <div class="menu">
            <?php
                include 'menu.php';
            ?>
        </div>
        <div class="conteudo">
            <?php
                include 'conteudo_index.php';
            ?>
        </div>
        <div class="rodape">
            <?php
                include 'rodape.php'
            ?>
        </div>
    </div> <!-- fim da div geral -->
</body>
</html>