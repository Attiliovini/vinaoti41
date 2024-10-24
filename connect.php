<?php header("Content-type: text/html;charset=utf8");
$host = "localhost";
$user ="root";
$pass="";
$db="Vinicius";

$link = mysqli_connect($host,$user,$pass,$db);
$banco = mysqli_connect_errno();
if($banco == true){
    echo "Erro na conexão";
}else {
    echo "conexão ok";
}