<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <!-- Para este ejercicio tenemos que modificar nosotros los valores en el buscador ej: http://localhost/DWES%20Proyectos/PHP/2023-11-07.php?nombre=pepe&apellido=a&edad=19&direccion=oooo -->
        <!-- Además tenemos que instalar la Extensión de Code de php server -->
        <?php
        /*GET Y POST PARA DAR Y SOLICITAR INFORMACION
        cuando usamos GET, acepta el paso de parametros por la URL
        */
 
        if (is_null($_GET["nombre"])) {
            echo "nombre es null <br>";
        } else {
            echo "nombre no es null <br>";
        }
 
        if (is_null($_GET["apellido"])) {
            echo "apellido es null <br>";
        } else {
            echo "apellido no es null <br>";
        }
 
 
        /*
        empty();
        is_null();
        */
 
        
        echo $_SERVER['REQUEST_METHOD'];
        echo "</br>";
        //echo $_GET["nombre"];
        print_r($_GET);
        echo "</br>";
 
        echo "Hola " . $_GET["nombre"] . "</br>";
 
        $edad = $_GET["edad"];
        echo "Tiene " . $edad . "años" . "</br>";
 
        echo $_GET["direccion"];
       
 
        ?>
 
    </p>
</body>
</html>