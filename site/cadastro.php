<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


</body>
</html>
<?php


 // conexão com o banco de dados 
  include "connect.php";

// arquivo de cadastro
	$nome 		 = 	$_POST['nome'];
	$email 		 = 	$_POST['email'];
	$senha	   	 = 	$_POST['senha'];
	$repetesenha = 	$_POST['repetesenha'];
	$lembrete 	 = 	$_POST['lembrete'];
	$foto		 =  $_FILES['foto']['name'];
	$tipo 		 =  $_FILES['foto']['type'];

	var_dump($_FILES);


	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
	  echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
	} else {
	  echo "Sorry, there was an error uploading your file.";
	}
  }

/*
		echo "Nome 				 : $nome<br>";
		echo "Email 			 : $email<br> ";
		echo "Senha 			 : $senha<br> ";
		echo "Repetição de senha : $repetesenha<br> ";
		echo "Lembrete  		 : $lembrete<br> ";
		echo "Tipo      		 : $tipo";
*/
 			// variaveis diferentes de vazio ?
/*		$registro == false;
		if ($nome != "" && $email !="" && $senha!="" && $lembrete !="" && $foto!="") {
			
			if ($senha != $repetesenha) {

				echo "<script> alert(' Senhas diferentes '); window.history.go(-1);</script>";
				}
			
				else{
					 $registro == true;
					}

						}else{

							echo "<script> alert(' É necessario preencher todos os campos'); window.history.go(-1);</script>";
								}

// 

	$sql  =  mysqli_query($link, "SELECT * FROM tb_user order by id_user desc limit 3" );									
       
        while($line = mysqli_fetch_array($sql)){
        	$id = $line['id_user'];
        	$nome_user = $line['nome'];
        }

         echo "$id<br>";
         echo "$nome_user";
*/
?>