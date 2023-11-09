<?php
        if(!isset($_COOKIE["visitas"])){  /* El isset siginifica "si no está creada la variable" */
            $visitas=0;
        }else {
            $visitas = $_COOKIE["visitas"];
            $visitas++;
        }
        setcookie("visitas", $visitas, time() + 3600 * 24 * 30 * 3);  /* Multiplicamos los 3600 segundos de una hora por 24 horas de un día y por 30 días de un mes */
        echo "Número de visitas: " . $visitas;
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <!-- Las coockies son ficheros que el servidor guardan en nuestro ordenador desde 1970-01-01 -->
    <h1>Bienvenido!</h1>

        <!-- Formulario con un botón para borrar cookies -->
        <form method="post">
        <button type="submit" name="borrarCookies">Borrar cookies</button>
    </form>
 
    <?php
        // Verificar si se ha enviado la solicitud POST desde el formulario
        if (isset($_POST["borrarCookies"])) {
            // Eliminar la cookie "visitas" estableciendo su tiempo de expiración en el pasado
            setcookie("visitas", "", time() - 3600);
           
            // Recargar la página para reflejar el cambio en las cookies
            header("Refresh:0");
        }
    ?>
</html>