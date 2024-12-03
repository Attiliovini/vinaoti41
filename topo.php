<div class="topo">
    <img class="logo" src="imagens/logo.png">
    <?php
    session_start();
    if (isset($_SESSION['cpf'])) {
        echo "<div style='color:white;font-size: 20px;text-transform: uppercase;'>Seja bem vindo, " . $_SESSION['nome'] . "</div>";
        echo '<a href="logooff.php" class="link_top"> Sair </a>';
        // echo '<a href="cadastros.php" class="link_top"> USUÁRIOS </a>';       
        /*Alterado em 11/11/2024*/
    }
    ?>
    <div class="menu">
        <ul class="link_menu">
            <li><a href="betour.php">INICIO</a></li>
            <li><a href="empresa.php">QUEM SOMOS</a></li>
            <li><a href="pacotes.php">VIAGENS</a></li>
            <li><a href="contato.php">CONTATO</a></li>
        </ul>
    </div>

    <?php
    if (!isset($_SESSION['cpf'])) {
        echo '<div class="entrar-cadastro">';
        echo '<a href="/vinaoti41/ProjetoFrond/entrar.php" class="botao-entrar">';
        echo '       <img class="iconentrar" src="imagens/entrar.png" alt="Ícone de entrar">';
        echo '       Iniciar Sessão';
        echo '   </a>';
        echo '</div>';
    }
    ?>
</div>






<!-- <a href="/vinaoti41/ProjetoFrond/cadastrar.php">Cadastre-se</a> -->
