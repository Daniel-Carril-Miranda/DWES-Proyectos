<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Biblioteca</h1>
    <ul>
        <?php foreach ($biblioteca as $material): ?>
            <li><?= $material->__toString() ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>