<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="entrar-cadastro">
        <?php
        include "topo.php";
        ?>
    </div>

    <div class="cinzacadastrar">
        <img class="logocadastro" src="imagens/cadastrasse.png">

        <div id="box_form">
            <h1 class="titulos" style="font-size: 40px">Cadastra-Se</h1>
            <form action="cadastrarAction.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id">
                <p>Nome:<input type="text" name="nome" class="campos_cad" placeholder="NOME"></p>
                <p>CPF:<input type="text" name="cpf" class="campos_cad" placeholder="CPF"></p>
                <p>Senha:<input type="password" name="senha" class="campos_cad" placeholder="SENHA"></p>
                <p>Data de Nascimento:<input type="text" name="datadenascimento" class="campos_cad"
                        placeholder="DATA DE NASCIMENTO"></p>

                <!-- formatação dos botoes -->
                <div id="botoes">
                    <!-- Trazer o botão atualizar qdo o id for maior que 0-->
                    <input type="submit" value="Concluir" class="bt_entra">
                </div>

        </div>
        <div class="botoes">
            <p class="p_form">Já Possui cadastro? Então click no link abaixo para login</p>
            <a href="entrar.php" class="form_link">LOGAR</a>
        </div>
    </div>


    <footer class="remocao_margin">
        <?php
        include "rodape.php";
        ?>
    </footer>

</body>

</html>