<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    
</head>
<body>
<form method="POST">
    <label>Num1 :</label>
    <input type="number" name="fnum1">
    <br><br>
    <label>Num2 :</label>
    <input type="number" name="fnum2">
    <br><br>
    <input type="submit" value="Somar">
    <input type="reset" value="Limpar">
</form>
<div id="resultado">
<?php
    //header("content-type: text/html; charset=utf-8");
    // receber as informações do formulario
    if (isset($_POST['fnum1']) && isset($_POST['fnum2'])) {
        $n1 = $_POST['fnum1'];
        $n2 = $_POST['fnum2'];
        $soma = $n1 + $n2;
        if ($soma > 20) {
            echo "Resultado : " . $soma;
            $soma = $soma + 8;
            echo "<br>Resultado : " . $soma;
        } else {
            echo "Resultado : " . $soma;
            $soma = $soma - 5;
            echo "<br>Resultado : " . $soma;
        }
    }
?>
</div>
</body>
</html>