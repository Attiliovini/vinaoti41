<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="entrar-cadastro">
        <?php
        include "topo.php";
        ?>
    </div>
    <!-- Página de Contato -->
    <div class="contatocinza">
        <h1 class="ajustecontato">Contatos</h1>
        <div>
            <img class="logocontato" src="imagens/contato.png">
            <form method="post">
                <label class="legenda">NOME :</label><br>
                <input type="text" name="nome" class="campos" placeholder="Preencha este campo com seu nome" required><br>
                
                <label class="legenda">EMAIL :</label><br>
                <input type="email" name="email" class="campos" placeholder="Digite seu emali aqui" required><br>
                
                <label class="legenda">ASSUNTO :</label><br>
                <input type="text" name="assunto" class="campos" placeholder="Sobre o que você deseja falar ?" required><br>
                
                <label class="legenda">CONTEUDO :</label><br>
                <textarea name="conteudo" class="campo2" placeholder="Digite no maximo 140 caracteres o conteudo"
                maxlength="140" required></textarea><br>
                
                <input type="submit" value="ENVIAR" class="bt_enviar">
            </form>
        </div>
    </div>

    <footer class="remocao_margin">
            <?php
                include "rodape.php";
            ?>
        </footer>
</body>

</html>