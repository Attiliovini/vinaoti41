<?php header("Content-type: text/html;charset=utf8");

// Trazer as variaveis do form
$nome= $_POST['nome'];
$email= $_POST['email'];
$assunto= $_POST['assunto'];
$conteudo= $_POST['comentarios'];

// chamando a conexao com o banco
include_once("connect.php");

//criando uma variavel que vai conter o comando mysql para inserir registros
$sql = "INSERT INTO contato(nome,email,assunto,conteudo) value ('$nome','$email','$assunto','$conteudo')";
echo $sql;

$resultado = mysqli_query($link,$sql);
var_dump($resultado);
if ($resultado == true){
    echo('<script> alert("Contato inserido com sucesso!!");</script>');
}else{
    echo ('<script> alert("Falha na insercao do contato");</script>');
}   