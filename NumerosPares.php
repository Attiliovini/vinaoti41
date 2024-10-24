<?php 

echo "imprimir numero pares <br>";
$valores = array(0,10,3,1,7,55,50,40,15,21,99, // sempre do 0 a continuacao
104,155,122,133,154,160,161);
$i = 0;
while($i <= 17 ){
    if ($valores[$i]%2==0){
        echo $valores[$i]."<br>";
    }
    $i++;
}
?>