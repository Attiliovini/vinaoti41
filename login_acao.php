<?php

session_start(); /* Alterado 04/11/2024 */

$CPF = $_POST['cpf'];
$senha = $_POST['senha'];

 // chmando a conexão com o banco 
 include_once("conexao.php");

 //Select de pesquisa do usuário
 $sql = "SELECT `id`, `nome`, `cpf`, `senha`, `datadenascimento` FROM `cadastros` WHERE  `CPF` = '".$CPF."' AND `senha` = '".$senha."'";

 //Executando a select
 $resultado = mysqli_query($link,$sql);
 
 //Verificando o resultado
 var_dump($resultado);

 //Verificando os dados que vem
 $id=0;
 foreach ($resultado as $valor) {
    var_dump($valor);
    $id = $valor['id'];
 }

 //Se tiver resultado o valor de ID vai ser maior que 0
 if ($id > 0) {
   $_SESSION['nome'] = $valor['nome']; /*Alterado em 04/11/2024 */ 
   $_SESSION['cpf'] = $valor['cpf']; /*Alterado em 04/11/2024 */ 
  $_SESSION['id'] = $valor['id'];/* Alterado em 04/11/2024 */ 
    ?>
    <script>
    alert("usuário conectado com sucesso!");
    window.location.replace("betour.php");  
    </script>
<?php
 } else {
   unset ($_SESSION['cpf']); /*Alterado em 04/11/2024 */ 
  unset ($_SESSION['senha']); /*Alterado em 04/11/2024 */ 
    ?>
    <script>
    alert("usuário ou senha incorretas!");
    window.location.replace("entrar.php");
    </script>
    <?php
 }

?>