<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <h2>clientes suscritos</h2>
    <ol>
        <?php
        foreach ($cliente as $clientes) {
            if ($clientes['suscripcion'] == true) {
                echo "<li>{$clientes['nombre']}</li>";
            }
        }
        ?>
    </ol>
    <h2>clientes no suscritos</h2>
    <ol>
        <?php
        foreach ($cliente as $clientes) {
            if ($clientes['suscripcion'] == false) {
                echo "<li>{$clientes['nombre']}</li>";
            }
        }
        ?>
    </ol>
    <h2>clientes que hayan hecho pedidos</h2>
    <ol>
        <?php
        foreach ($cliente as $clientes) {
            if ($clientes['listaProductos']['precioTotal'] > 0) {
                echo "<li>{$clientes['nombre']} {$clientes['listaProductos']['precioTotal']}€</li>";
            }
        }
        ?>
    </ol>


    <h1>Ejercicio 2</h1>
    <h2>Clientes que hayan hecho pedidos por orden decreciente</h2>
        <?php
        function filtrar($a, $b)
        {
            return $b['listaProductos']['precioTotal'] - $a['listaProductos']['precioTotal'];
        }
        usort($cliente, 'filtrar');
        foreach ($cliente as $clientes) {
            if ($clientes['listaProductos']['precioTotal'] > 0) {
                echo "Nombre: " . $clientes['nombre'] . ", Precio Total: " . $clientes['listaProductos']['precioTotal'] . "€" . "<br>";
            }
        }

        ?>
</body>

</html>