<?php
    session_start();
    if (!isset($_SESSION["usuario"])){
        header("Location:index.php?redirigido=true");
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
    <h1>BIENVENIDO</h1>
    <?php
    /*Vamos a hacer que nos saque una información si es admin y otra si es usuario*/

    if ($_SESSION["rol"] == "1"){
        echo "Eres Admin";
    } elseif ($_SESSION["rol"] == 2) {
        echo "no eres admin";
    }
    ?>
</body>
</html>