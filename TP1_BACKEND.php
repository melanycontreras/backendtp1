<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <?php
    $saludo = "Hola mundo";

    echo $saludo;
     ?>
     <br>
     <br>

    <?php

    $string = "Hola mundo";

    echo $string;
    ?>
    <br>
    <br>

    <?php
    
    $variable1= 24;
    $variable2= 48;
    echo "$variable1 y $variable2";
    ?>
    <br>
    <br>
    <?php
    echo "suma:" .$variable1+$variable2;
    ?>
    <br>
    <br>
    <?php
    echo "resta:" .$variable1-$variable2;
    ?>
    <br>
    <br>
    <?php
    echo "multiplicacion:" .$variable1*$variable2;
    ?>
    <br>
    <br>
    <?php
    echo "division:" .$variable1/$variable2;
    ?>
    <br>
    <br>
    
    <?php
    $grados=20;
    echo "Celsius:" .$grados. "ºC";
    ?>
    <br>

    <?php
    echo "Farenheit" .(($grados*1.8)+32)."ºCº"
    ?>
    <br>
    <br>

    <?php
    $base=18;
    $altura=12;
    echo "rectangulo base*2.altura*2 18cm.12cm"
    ?>
    <br>
    <?php
    echo "perimetro=" .$base*2 + $altura*2
    ?>
    <br>
    <br>
    <?php
    echo "area del rectangulo = ".$base*$altura;
    ?>
    <br>
    <br>
    <?php
     $radio=30;
     echo "radio del circulo 30cm";
     ?>
     <br>
     <?php
     echo "perimetro del circulo". 2*3.1416*$radio;
     ?>
     <br>
     <br>
     <?php
     echo "area del circulo:" . 3.1416* $radio,2;
     ?>




 


 
</body>
</html>