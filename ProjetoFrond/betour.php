<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="entrar-cadastro">
        <?php
            include "topo.php";
        ?>

    </div>
    
    <!-- imagem fixa com promocao-->
    <div class="imagem-container">
        <div class="imagemfixa">
            <div class="promo"><p>BLACK FRIDAY PACOTES 50% OFF</p></div>    
        </div>        
    </div> 

          <div class="cinzabaixo_container">
          <div class="info_1">
                <img class="viagens" src="imagens/arraialcabo217x134.png">
                <h2> Pacote </h2>
                <h3>Arraial do Cabo</h3>
                <p> Ida: 22/11/2024 <BR> Volta: 24/11/2024 <BR> 6x de R$120 <BR> A partir de R$ 720</p>
            </div>
            <div class="info_1">
                <img class="viagens" src="imagens/ilhabela217X128.png">
                <h2> Bate e Volta </h2>
                <h3>Ilha Bela</h3> 
                <p>Data: 17/11/2024 <BR> 2x de R$100 <BR> A partir de R$ 200</p>
            </div>
            <div class="info_1">
                <img class="viagens"src="imagens/capitolio217x134.png">
                <h2> Pacote </h2>
                <h3>Capitólio</h3>
                <p> Ida: 20/12/2024 <BR> Volta: 22/12/2024 <BR> 6x de R$100 <BR> A partir de R$ 600</p>
            </div>
            <div class="info_1">
                <img class="viagens"src="imagens/jalapao217x134.png">
                <h2> Pacote </h2>
                <h3>Jalapão</h3>
                <p>  Ida: 17/04/2025 <BR> Volta: 22/04/2025 <BR> 10x de R$180 <BR> A partir de R$ 1.800</p>
            </div>
        </div>

        <footer class="remocao_margin">
            <?php
                include "rodape.php";
            ?>
        </footer>

</body>

</html>