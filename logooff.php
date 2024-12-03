<?php
session_start();

  unset ($_SESSION['cpf']);
  unset ($_SESSION['senha']);

header('location:entrar.php');
?>
