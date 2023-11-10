<?php
function comprobar_usuario($nombre, $clave)
{
    if ($nombre == "usuario" && $clave == "1234") {
        $usu["nombre"] = "usuario";
        $usu["rol"] = 0;
        return $usu;
    } elseif ($nombre == "admin" && $clave == "1234") {
        $usu["nombre"] = "admin";
        $usu["rol"] = 1;
        return $usu;
    } else
        return FALSE;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usu = comprobar_usuario($_POST["usuario"], $_POST["clave"]);
    if ($usu == FALSE) {
        $err = TRUE;
    } else {
        session_start();
        $_SESSION['usuario'] = $_POST["usuario"];
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