<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>
        <?php foreach ($nuevaLista as $libro) : ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"]; ?> (<?= $libro['año'] ?>), por <?= $libro ['autor'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </p>
</body>
</html>