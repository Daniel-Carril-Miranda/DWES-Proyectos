<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Vamos a crear una variable cadena conexion porque vamos a guardar aqui en una cadena de texto los datos de conexion que necesitamos. declaramos dentro el sql y el nombre de la base de datos.*/
    $cadena_conexion = 'mysql:dbname=dwes_t3;host=127.0.0.1';
    $usuario="root";
    $clave = "";

    /*como puede fallar lo metemos en un trycatch*/
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
        // $bd = new PDO($cadena_conexion, $usuario, $clave);
        echo "conexión realizada con éxito";

        $usu = "SELECT usuario FROM usuarios";
        $todosCampos = "SELECT * FROM usuarios";

        echo "<br>";

        $usuarios = $bd->query("SELECT usuario FROM usuarios"); //Aquí podríamos poner $usu

        foreach ($usuarios as $item){
            print $item ["usuario"] . "<br/>";
            // print_r($row);

        }
        echo "</br/>";

        $todos = $bd->query($todosCampos);

        foreach ($todos as $item){
            print "Usuario: " . $item ["usuario"] . "<br/>";
            print "ID: " . $item ["id"] . "<br/>";
            print "Nombre: " . $item ["nombre"] . "<br/>";
            print "Clave: " . $item ["clave"] . "<br/>";
            print "Rol: " . $item ["rol"] . "<br/>";
            print "Correo: " . $item ["correo"] . "<br/>";
            echo "<br>";
            
            // print_r($row);

        }
        echo "</br/>";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>
</html>