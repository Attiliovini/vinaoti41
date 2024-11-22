<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="utf-8">
    <title>Entrar</title>

</head>

<body>
    <div class="entrar-cadastro">
        <?php
        include "topo.php";
        ?>
    </div>

    <div class="cinzaentrar">
        <img class="logoentrar" src="imagens/entrar.png">

        <div id="box_form">
            <form action="login_acao.php" method="POST" enctype="multipart/form-data">
                <p>Email: <input type="email" name="email" class="campos_cad" placeholder="email"></p>
                <p>Senha: <input type="password" name="senha" class="campos_cad" placeholder="senha"></p>
                <!-- formatação dos botoes -->
                <div id="botoes">
                    <input type="submit" value="LOGAR" class="bt_cad">
                </div>

            </form>


            <footer>
                <?php
                include "rodape.php";
                ?>
            </footer>
        </div>
    </div> <!-- fim da div geral -->
</body>

</html>