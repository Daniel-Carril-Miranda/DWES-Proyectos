<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>
        <?php
            $libros = [
                [
                    "titulo" => "La biblia",
                    "año" => "0",
                    "autor" => "Jk Rowling",
                    "precio" => "10€",
                    "url" => "https://www.eltiempo.es/gijon.html",
                ],
                [
                    "titulo" => "Lazaro de Tormes",
                    "año" => "1500",
                    "autor" => "Maluma",
                    "precio" => "230€",
                    "url" => "https://es.wallapop.com/",
                ],
                [
                    "titulo" => "Fray Perico, Calcetín",
                    "año" => "2001",
                    "autor" => "BadGyal",
                    "precio" => "12€",
                    "url" => "https://www.chess.com/login_and_go?returnUrl=https://www.chess.com/home",
                ],
                [
                    "titulo" => "Y el guerrillero Martín",
                    "año" => "2573",
                    "autor" => "John Cena",
                    "precio" => "-1€",
                    "url" => "https://chat.openai.com/",
                ],
            ];
        ?>
    </p>
    <br>
    
    <!-- USO DEL ARRAY FILTER -->
    <?php
            $nuevaLista = array_filter ($libros, function ($libro) {
            return $libro['autor'] === 'Maluma';
        });
    ?>
    <br>

    <p>
        <?php foreach ($nuevaLista as $libro) : ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"]; ?> (<?= $libro['año'] ?>), por <?= $libro ['autor'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </p>