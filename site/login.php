<?php
// conexão com o banco de dados include "connect.php";
include "connect.php";

// arquivo de cadastro
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM `cadastro` WHERE email ='$login' and senha ='$senha'";

$resultado = mysqli_query($link, $sql);
var_dump($resultado);

if ($resultado == true) {
    echo ('<script> alert("Logado com sucesso!!"); window.location.href="http://localhost/vinaoti41/site/index.php"; </script>');

} else {
    echo "<script> alert('ERRO, TENTE NOVAMENTE!!'); </script>";
}

?>