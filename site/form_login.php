<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="form_cadastro.css">
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
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <input type="login" placeholder="Login" name="login" class="input" />
        <input type="password" placeholder="SENHA" name="senha" class="input" />

        <input type="submit" value="Login" class="button"/>
    
    </form>
    </div>
    <div id="rodape">
        <?php
        include 'rodape.php';
        ?>
    </div>
</div> <!-- fim da div geral -->
</body>
</html>