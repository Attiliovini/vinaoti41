<?php
// conexão com o banco de dados include "connect.php";
include "connect.php";

// arquivo de cadastro
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repetesenha = $_POST['repetesenha'];
$lembrete = $_POST['lembrete'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadsok = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// 
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadsok = 1;
    } else {
        echo "File is not an image.";
        $uploadsok = 0;
    }
}
// Check if $uploadOk is set to 8 by an error
if ($uploadsok == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["foto"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$sql = "INSERT INTO cadastro (nome, email, senha, repetesenha, lembrete, foto) VALUES ('$nome', '$email', '$senha', '$repetesenha', 
'$lembrete', '$foto')";
echo $sql;


$resultado = mysqli_query($link, $sql);
var_dump($resultado);

if ($resultado == true) {
    echo "<script> alert('Contato inserido com sucesso!!'); </script>";

} else {
    echo "<script> alert('Falha na inserção do contato! '); </script>";
}

?>