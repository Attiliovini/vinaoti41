<div class="container">
    <h1 class="titulo">Cadastre-se</h1>

    <form action="cadastro.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="NOME" name="nome" class="input" />
        <input type="email" placeholder="EMAIL" name="email" class="input" />
        <input type="password" placeholder="SENHA" name="senha" class="input" />
        <input type="password" placeholder="REPETIR SENHA" name="repetesenha" class="input" />
        <input type="text" placeholder="LEMBRETE" name="lembrete" class="input" />
        <input type="file" class="input" name="foto"/>

        <input type="submit" value="CADASTRAR" />
        <input type="reset" value="LIMPAR" class="button" />
    </form>

    <a href="index.php" class="linkIndex">VOLTAR PARA PÁGINA PRINCIPAL</a>
    <p>Já possui cadastro? Clique no link abaixo para Login</p>
    <a href="index.php" class="linkIndex">LOGAR</a>
</div>