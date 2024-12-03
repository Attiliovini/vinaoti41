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
        <div class="direita">
            <div class="box_form">
                <form action="login_acao.php" method="POST" enctype="multipart/form-data">
                    <p>CPF: <input type="cpf" name="cpf" class="campos_cad" placeholder="CPF"></p>
                    <p>Senha: <input type="password" name="senha" class="campos_cad" placeholder="SENHA"></p>
                    <!-- formatação dos botoes -->
                    <div id="botoes">
                        <input type="submit" value="LOGAR" class="bt_entrar">
                    </div>
            </div>
            </form>
            <div class="voltaprincipal">
                <a href="betour.php" class="form_link">&larr;VOLTAR PARA PAGINA PRINCIPAL</a>
                <p class="p_form2">Não Possui cadastro? Então click no link abaixo para login</p>
                <a href="cadastrar.php" class="form_link2">Cadastro</a>
            </div>


            <footer class="remocao_margin">
        <?php
        include "rodape.php";
        ?>
    </footer>
        </div>
    </div> <!-- fim da div geral -->
</body>

</html>