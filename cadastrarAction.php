<?php

// conexão com o banco de dados 
include "conexao.php";

// arquivo de cadastro
    $id          =  $_POST['id']; /* Alterado em 13/11/2024 */
	$nome 		 = 	$_POST['nome'];
	$CPF 		 = 	$_POST['cpf'];
	$senha	   	 = 	$_POST['senha'];
	$datanascimento = 	$_POST['datadenascimento'];
    
    $sql = "INSERT INTO `cadastros`(`nome`, `cpf`, `senha`, `datadenascimento`) VALUES ('".$nome."','".$CPF."','".$senha."','".$datanascimento."')";
    
    $resultado = mysqli_query($link,$sql);
    echo ('<script> alert("Cadastro Inserido com sucesso!!!");</script>');
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; http://localhost/vinaoti41/ProjetoFrond/entrar.php">';
    
    
    ?>