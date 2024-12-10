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

        <div class="box_formEntra">
        <form action="login_acao.php" method="POST" enctype="multipart/form-data">
                <p>CPF: <input type="cpf" required name="cpf" class="botaoform" placeholder="CPF"></p>
                <p>Senha: <input type="password" required name="senha" class="botaoform" placeholder="SENHA"></p>
                <!-- formatação dos botoes -->
                <div id="botoes">
                    <input type="submit" value="ENTRAR" class="bt_entrar">
                    <a href="index.php" class="form_link">&larr;VOLTAR PARA PAGINA INICIAL</a>
                </div>
            </form>
        </div>

        <div class="p_form2">
            <p> Não Possui cadastro? <a href="cadastrar.php" class="form_link2">Click Aqui</a></p>
        </div>
        



    </div> <!-- fim da div geral -->

    <footer class="remocao_margin">
        <?php
        include "rodape.php";
        ?>
    </footer>
</body>

</html>