<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    header("content-type: text/html;  charset=utf-8");

    $n1=$_GET['fnota1'];
    $n2=$_GET['fnota2'];
    $n3=$_GET['fnota3'];
    $nome=$_GET['fnome'];
    $media=($n1+$n2+$n3)/3;

    $media=number_format($media,1);
    echo "A media do $nome é = $media";
    ?>
    
</body>
</html>