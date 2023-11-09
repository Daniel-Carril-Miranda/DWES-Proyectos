<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION["count"])){
            $_SESSION["count"] = 0;
            $_SESSION["nombre"] = "pepe";
            $_SESSION["rol"] = "admin";
        } else {
            $_SESSION["count"]++;
        }
        // SET
        // print_r($_COOKIE);
        print_r($_SESSION); 

        echo "hola " . $_SESSION["nombre"] . "<br>";
        echo "Contador: " . $_SESSION["count"] . "<br>";
        echo "rol: " . $_SESSION["rol"] . "<br>";

    ?>
</body>
</html>