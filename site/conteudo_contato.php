<form action="cad_cadastro.php" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" placeholder="Digite o nome!">
    <br />
    <label for="email">E-mail: </label>
    <input type="text" id="email" name="email" placeholder="Digite o e-mail!">
    <br />
    <label for="assunto">Assunto: </label>
    <input type="text" id="telefone" name="assunto" placeholder="Digite o assunto!">
    <br />
    <label for="conteudo" style="display: block;">Conteúdo: </label>
    <textarea name="conteudo" id="comentario" cols="30" rows="10" placeholder="Digite no máximo 140 caracteres!"></textarea>
    <br />

    <input type="submit" value="Enviar">
</form>