<?php
    if($_POST ["usuario"] == "pepe" && $_POST["clave"] == "1234"){
        header ("Location:bienvenido.html");
    } else {
        header ("Location:error.html");
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
        print_r ($_POST);
        echo "Usuario introducido: " . $_POST["usuario"] . "<br>";
        echo "Clave intoducida: " . $_POST["clave"] . "<br>";

        print_r ($_SERVER["REQUEST_METHOD"]) /* print_r  y var_dump se utilizan para mostrar contenido de Arreglos en pantalla, aunque var_dump es más específico y muestra más detalles*/

    ?>
</body>
</html>