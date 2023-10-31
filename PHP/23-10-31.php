<?php

// Dividir dos números 
// 1. Permite dividir la variable $num1 entre $num2
// Calcula la raiz cuadrada de $numero 

function dividir($num1, $num2){
    if ($num2 == 0){

        throw new Exception("No es posible dividir entre cero");
    }
    return $num1 / $num2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>Inicio del programa</h1>";
    try{
        echo dividir (10,2);
        echo "<br>";
        echo dividir (10,0);
        echo "<br>";
        echo dividir (20,4); /* Esto ya no lo va a ejecutar pq el error estaba encima. Si queremos que nos los ejecute también deberíamos poner varios try Catch */
        echo "<br>";
    } catch (Exception $e){
        echo "Error: " . $e->getMessage() . "<br>";
    } finally {
        echo "Siempre se va a ejecutar esto, haya error o no" . "<br>";
    }

?>
</body>
</html>