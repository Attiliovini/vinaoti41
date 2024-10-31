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
    echo "<script> alert('Contato inserido com sucesso!!'); </script>";

} else {
    echo "<script> alert('Falha na inserção do contato! '); </script>";
}

?>