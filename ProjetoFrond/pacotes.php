<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacotes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="entrar-cadastro">
        <?php
        include "topo.php";
        ?>
    </div>
    <div class="pacotecinza">
        <div id="pacotes">
            <h1 class="titulo" style="font-size: 40px">Pacotes</h1>
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
        </div>

        <div class="pacote_container">
            <div class="pacotes">
                <img class="viagens" src="imagens/arraialcabo217x134.png">
                <h2> Pacote </h2>
                <h3>Arraial do Cabo</h3>
                <p> Ida: 22/11/2024 <BR> Volta: 24/11/2024 <BR> 6x de R$120 <BR> A partir de R$ 720</p>
            </div>
            <div class="pacotes">
                <img class="viagens" src="imagens/ilhabela217X128.png">
                <h2> Pacote </h2>
                <h3>Ilha Bela</h3>
                <p>Ida: 24/12/2024 <BR> Volta:27/12/2024 <BR> 4x de R$300 <BR> A partir de R$ 1200</p>
            </div>
            <div class="pacotes">
                <img class="viagens" src="imagens/capitolio217x134.png">
                <h2> Pacote </h2>
                <h3>Capitólio</h3>
                <p> Ida: 20/12/2024 <BR> Volta: 22/12/2024 <BR> 6x de R$100 <BR> A partir de R$ 600</p>
            </div>
            <div class="pacotes">
                <img class="viagens" src="imagens/jalapao217x134.png">
                <h2> Pacote </h2>
                <h3>Jalapão</h3>
                <p> Ida: 17/04/2025 <BR> Volta: 22/04/2025 <BR> 10x de R$180 <BR> A partir de R$ 1.800</p>
            </div>
        </div>
    </div>
    <footer>
        <?php
        include "rodape.php";
        ?>
    </footer>
</body>

</html>