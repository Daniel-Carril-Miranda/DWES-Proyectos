<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>

    

    <h1><u>Biblioteca</u></h1>
    
    <h2><u>Libros antes de ser prestados</u></h2>
    <?php
    
    echo "<br>";
    echo $biblioteca[0];
    echo "<br>";
    echo "<br>";
    echo $biblioteca[1];
    echo "<br>";
    ?>

    <h2><u>DVDs antes de ser prestados</u></h2>

    <?php
    echo "<br>";
    echo $biblioteca[2];
    echo "<br>";
    echo "<br>";
    echo $biblioteca[3];
    echo "<br>";
    ?>

    <h2><u>Prestamos el libro</u></h2>

    <?php
    echo "<br>";
    echo $biblioteca[0]->prestar();
    echo "<br>";
    echo $biblioteca[0];
    echo "<br>";
    ?>

    <h2><u>Prestamos el DVD</u></h2>

    <?php
    echo "<br>";
    echo $biblioteca[3]->prestar();
    echo "<br>";
    echo "<br>";
    echo $biblioteca[3];
    echo "<br>";
    ?>

    <h2>Intentamos volver a tomar prestado el mismo DVD</h2>

    <?php
    echo "<br>";
    echo $biblioteca[3]->prestar();
    echo "<br>";
    echo "<br>";
    echo $biblioteca[3];
    echo "<br>";
    ?>
    <h2><u>Devolvemos los mateiral</u></h2>

    <?php
    echo "<br>";
    echo $material[0]->devolver();
    echo "<br>";
    echo "<br>";
    echo $material[0];
    echo "<br>";
    echo "<br>";
    echo $material[3]->devolver();
    echo "<br>";
    echo "<br>";
    echo $material[3];
    echo "<br>";
    ?>
    <h2><u>Intentamos devolver biblioteca no prestado</u></h2>
    <?php
    echo "<br>";
    echo $material[2]->devolver();
    echo "<br>";
    echo "<br>";
    echo $material[2];
    echo "<br>";
    ?>

</body>
</html>