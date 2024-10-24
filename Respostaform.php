<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/

$MAILTO = isset($_POST['MAILTO']) ? $_POST['MAILTO'] : '';
//echo "Mailto: " . $MAILTO . "<br>";
$SUBJECT = isset($_POST['SUBJECT']) ? $_POST['SUBJECT'] : '';
//echo "Assunto: " . $SUBJECT . "<br>";
$PAGETO = isset($_POST['PAGETO']) ? $_POST['PAGETO'] : '';
//echo "Pageto: " . $PAGETO . "<br>";
$Nome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
//echo "Nome: " . $Nome . "<br>";
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
//echo "Email: " . $Email . "<br>";
$Senha = isset($_POST['Senha']) ? $_POST['Senha'] : '';
//echo "Senha: " . $Senha . "<br>";
$GOSTOU = isset($_POST['GOSTOU']) ? $_POST['GOSTOU'] : '';
//echo "Gostou do Site? " . $GOSTOU . "<br>";
$LINKS = isset($_POST['LINKS']) ? $_POST['LINKS'] : '';
$LINKS2 = isset($_POST['LINKS2']) ? $_POST['LINKS2'] : '';
$LINKS3 = isset($_POST['LINKS3']) ? $_POST['LINKS3'] : '';
$LINKS4 = isset($_POST['LINKS4']) ? $_POST['LINKS4'] : '';
//echo "Links de Busca: " . $LINKS . "," . $LINKS2 . "," . $LINKS3 . "," . $LINKS4 . "<br>";
$ESPORTE = isset($_POST['OPCOES']) ? $_POST['OPCOES'] : '';
//echo "Esporte: " . $ESPORTE . "<br>";
$COMENTARIOS = isset($_POST['COMENTARIOS']) ? $_POST['COMENTARIOS'] : '';
//echo "Comentarios: " . $COMENTARIOS . "<br>";
$body = "Nome: ".$Nome."<br>Email:".$Email."<br>senha: ".$Senha."<br>Gostou: ".$GOSTOU."<br>".$LINKS."<br>";
 
require_once('PHPMailer_5.2.0/class.phpmailer.php');
/*

$mail = new PHPmailer(true);
$mail->CharSet = "UTF-8"; // ALTERADO 10/10/2024 - Acentuacao
$mail->IsSMTP(); 
try{
$mail->Host        = "mail.conectesites.com.br";// SMTP server
$mail->SMTPDebug   = 0; // enables SMTP debug information (for testing)
$mail->SMTPAuth    = true; // enable SMTP authentication
$mail ->SMTPSecure = 'ssl';
$mail->Port        = 465;  // set the SMTP port for the GMAIL server
$mail->Username    = "envio@conectesites.com.br"; // SMTP account username
$mail->Password    = "cia2015@@"; // SMTP account password
$mail->AddReplyTo('senac@conectesites.com.br', 'Envio');
$mail->AddAddress('senac@conectesites.com.br', 'Envio');
$mail->SetFrom('senac@conectesites.com.br', 'Envio');
$mail->Subject =  $SUBJECT; 
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional MsgHTML will create an alternate automatically
$mail->Body = $body;    

// $mail->MsgHTML(file_get_contents("contents.html'));
// $mail->AddAttachment('images/phpmailer.gif"); // $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
// attachment
$mail->Send();
echo "Formulario enviado!</p>\n";
} catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
echo $e->getMessage(); //Boring error messages from anything elset 2></body></html>
}*/

// conectando no banco de dados
$servername ='localhost';
$username ='root';
$password='';
$dbname ='vinicius';
$link = new mysqli($servername, $username, $password, $dbname);

// Verificar conexao 
if ($link->connect_error){
    die("erro de conexao; ".$link->connect_error);
}else{
    echo "Conectado!";
}  

// inserindo as informcacoes no banco de dados 
if ($GOSTOU == 'SIM'){
    $GOSTOUv = 0;
}else {
    $GOSTOUv = 1;
}
 if ($LINKS != ''){
    $LINKSv = 1;
 }else {
    $LINKSv = 0;
 }
 if ($LINKS2 != ''){
    $LINKS2v = 1;
 }else{
    $LINKS2v = 0;
 }
 if ($LINKS3 != ''){
    $LINKS3v = 1;
 }else{
    $LINKS3v = 0;
 }
 if ($LINKS4 !=''){
    $LINKS4v = 1;
 }else {
    $LINKS4v = 0;
 }
$sql = " INSERT INTO `contatos`(`nome`, `email`, `senha`, `gostou`, `cade`, `yahoo`, `google`, `altaVista`, `esporte`, `comentarios`) VALUES ('".$Nome."','".$Email."','".$Senha."','".$GOSTOUv."','".$LINKSv."','".$LINKS2v."','".$LINKS3v."','".$LINKS4v."','".$ESPORTE."','".$COMENTARIOS."')";
echo $sql;
// inserindo no banco 
if ($link->query($sql)=== TRUE){
      echo "Novo registro criado com sucesso";
}else{
    echo "Erro: ". $sql. "<br>". $conn->error;
}
?>

