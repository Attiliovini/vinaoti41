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

        <div class="box_form">
            <form action="login_acao.php" method="POST" enctype="multipart/form-data">
                <p>CPF: <input type="cpf" name="cpf" class="campos_cad" placeholder="CPF"></p>
                <p>Senha: <input type="password" name="senha" class="campos_cad" placeholder="SENHA"></p>
                <!-- formatação dos botoes -->
                <div id="botoes">
                    <input type="submit" value="LOGAR" class="bt_entrar">
                    <a href="index.php" class="form_link">&larr;VOLTAR PARA PAGINA PRINCIPAL</a>
                </div>
            </form>
        </div>

        <div class="p_form2">
            <p> Não Possui cadastro? Então click no link abaixo para login</p>
        </div>
        <a href="cadastrar.php" class="form_link2">Cadastro</a>



    </div> <!-- fim da div geral -->

    <footer class="remocao_margin">
        <?php
        include "rodape.php";
        ?>
    </footer>
</body>

</html>