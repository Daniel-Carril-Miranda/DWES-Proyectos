<?php

function conectarBD(){
    $cadena_conexion = 'mysql:dbname=dwes_t3;host=127.0.0.1';
    $usuario="root";
    $clave = "";

    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
        return $bd;
    } catch (PDOException $e) {
        echo "Error usuario no conectado";
    }
}

function comprobar_usuario($nombre, $clave){
    $conexionBD = conectarBD();
    $consulta = $conexionBD->query("SELECT usuario, rol FROM usuarios WHERE usuario = '$nombre' AND clave = '$clave'");

    if ($consulta->rowCount() > 0){
        $row = $consulta->fetch(PDO::FETCH_ASSOC); // El Fetch es como un array que te elimina no sé qué
        return array("nombre" => $row["usuario"], "rol" => $row["rol"]);
    } else {
        return FALSE;
    }

}
if ($_SERVER['REQUEST_METHOD'] == "POST") { //Si es POST siginica que previamente hemos enviado un formulario
    $usu = comprobar_usuario($_POST["usuario"], $_POST["clave"]);
    if ($usu == FALSE) {
        $err = TRUE;
    } else {
        session_start();
        $_SESSION['usuario'] = $_POST["usuario"];
        $_SESSION['rol'] = $usu["rol"];
        header("Location: Bienvenido1.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>

<body>
    <!-- Vamos a aprender a obrar con el _POST -->
    <?php
    if (isset($err)) {
        echo "<p>usuario o contraseña incorrectos</p>";
    }
    ?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
        <input value="<?php if (isset($usuario))
            echo $usuario; ?>" name="usuario">
        <input type="password" name="clave"> <!-- Este tipo nos permite que salgan puntitos para que no se vea -->
        <button action="submit">Enviar</button>
    </form>
</body>

</html>