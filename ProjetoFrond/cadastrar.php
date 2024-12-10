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
                <p>Nome:<input type="text" required name="nome" class="botaoform" placeholder="NOME"></p>
                <p>CPF:<input type="text" required name="cpf" class="botaoform" placeholder="CPF"></p>
                <p>Senha:<input type="password" required name="senha" class="botaoform" placeholder="SENHA"></p>
                <p>Data de Nascimento:<input type="text" required name="datadenascimento" class="botaoform"placeholder="DATA DE NASCIMENTO"></p>

                <!-- formatação dos botoes -->
                <div id="botoes">
                    <input type="submit" value="Concluir" class="bt_entra">
                    <BR>
                    <BR>
                    <p class="p_form3">Já Possui cadastro? <a href="entrar.php" class="form_link1">Logar</a> </p>
                </div>

        </div>
    
    </div>


    <footer class="remocao_margin">
        <?php
        include "rodape.php";
        ?>
    </footer>

</body>

</html>