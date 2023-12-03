<!-- Nuestra primera instrucción en PHP -->
<!-- LC1.1.3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h1>
        <?php echo "Hello World"; ?>
    </h1>
    <p>
        <?php
            $saludo = "Bienvenido";
            $nombre = "Daniel";
            echo $saludo . " " . $nombre;
        ?>
    </p>
    <br>
    <p>
        <?php
            $a = 5;
            $b = 5;
            echo "a = " . $a . " tipo = " . gettype($a) . "<br>";
            echo "b = $b tipo = " . gettype($b) . "<br>"; //Esto es lo mismo sin la falta de .
            echo "a+b = " . $a + $b . "<br>"; 
            echo "++a = " . ++$a . "<br>";
            echo "b++ = " . $b++ . "<br>";
            echo $b;
        ?>
    </p>
    <br>
    <p>
        <?php
            $c = "3.1416";
            echo "c = $c " . gettype($c) . "<br>";
            settype($c, "float"); // Lo convierte a Float
            echo "c = $c " . gettype($c);
        ?>
    </p>
    <br>
    <p>
        <?php
            //Manera 1 de Array
            $libros = ["Harry Potter", "the lord of the rings"];
            // Manera 2 de Array
            $libros2 = [
                0 => "Lazaro de Tormes",
                1 => "La biblia"
            ];
            // Maneta 3 de Array
            $libros3 = [
                [
                    "titulo" => "La biblia",
                    "autor" => "Jk Rowling",
                    "precio" => "10€",
                    "url" => "https://www.eltiempo.es/gijon.html",
                ],
                [
                    "titulo" => "Lazaro de Tormes",
                    "autor" => "Maluma",
                    "precio" => "230€",
                    "url" => "wikipedia.com",
                ],
            ];

            var_dump($libros);
            echo "<br>";
            var_dump($libros2);
        ?>
    </p>
    <br>
    <ul>
        <?php
            foreach ($libros as $book) {
                echo "<li>$book</li>";
            };
            echo "<br>";
            foreach ($libros3 as $book) {
                echo "<li>$book[autor]</li>";
            };
        ?>
    </ul>
    <br>
    <p>
        <?php foreach ($libros3 as $book) : ?>
            <li>
                <a href=<?= $book["url"];?>> <!-- Es lo mismo poner esto el igual sin php que el php con el echo -->
                    <?php echo $book ['precio'];?>
                </a>
            </li>
        <?php endforeach; ?>
    </p>

</body>
</html>