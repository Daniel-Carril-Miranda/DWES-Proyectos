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
    <!-- Filtrar por autor John Cena -->
    <p>
        <?php foreach ($libros as $libro) : ?>
            <?php if ($libro["autor"] == "John Cena"): ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"];?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </p>
    <br>
    <!-- Filtrar por autor con una función -->
    <?php
        function filtrarPorAutor ($libros, $autor) {
            $librosFiltrados = [];
            foreach ($libros as $libro){
                if ($libro["autor"] == $autor) {
                    $librosFiltrados[] = $libro;
                }
            }
            return $librosFiltrados;
        }
        // Esto es sólo para comprobar nosotros
/*         $listaNueva = filtrarPorAutor($libros);
        var_dump ($listaNueva); */
    ?>
    <br>
    <!-- En este caso lo hago con un filtro de función -->
    <?php
        $filtro = function ($libros, $año) {
            $librosFiltrados = [];
            foreach ($libros as $libro){
                if ($libro["año"] >= $año) {
                    $librosFiltrados[] = $libro;
                }
            }
            return $librosFiltrados;
            }
    ?>
    <br>
    <!-- Filtro genérica -->
    <?php
        $filtro2 = function ($items, $key, $value) {
            $itemsFiltrados = [];
            foreach ($items as $item){
                if ($item[$key] >= $value) {
                    $itemsFiltrados[] = $item;
                }
            }
            return $itemsFiltrados;
            }
    ?>
    <br>
    <!-- Uso la función genérica buscando en este caso por autor John Cena -->
    <p>
        <?php foreach ($filtro2($libros, "autor", "John Cena") as $libro) : ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"];?>
                    </a>
                </li>
        <?php endforeach; ?>
    </p>
    <br>
    <!-- Buscar por autor -->
    <p>
        <?php foreach (filtrarPorAutor($libros, "John Cena") as $libro) : ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"];?>
                    </a>
                </li>
        <?php endforeach; ?>
    </p>
    <br>
    <!-- Buscar por año -->
    <p>
        <?php foreach ($filtro($libros, "1") as $libro) : ?>
                <li>
                    <a href=<?= $libro["url"];?>>
                    <?=  $libro ["titulo"];?>
                    </a>
                </li>
        <?php endforeach; ?>
    </p>
</body>
</html>