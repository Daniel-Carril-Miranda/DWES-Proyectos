<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if ($_POST["usuario"] == "pepe" && $_POST["clave"]=="1234"){
            header("Location:bienvenido.html");
        } else {
            $usuario = $_POST["usuario"];
            $err = true;
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
        if(isset($err)){
            echo "<p>usuario o contraseña incorrectos</p>";
        }
    ?>
    <form action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
        <input value="<?php if (isset($usuario)) echo $usuario;?>"  name="usuario">
        <input type="password" name="clave"> <!-- Este tipo nos permite que salgan puntitos para que no se vea -->
        <button action="submit">Enviar</button>
    </form>
</body>
</html>
