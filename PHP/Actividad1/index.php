<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>
<p>
<?php 
    $clientes = [
        [
           "nombre" => "Juan",
           "Lista de pedidos" => "3",           
           "suscripcion" => "si",
        ],
        [
           "nombre" => "Pepe",
           "Lista de pedidos" => "",          
           "suscripcion" => "si",
        ],
        [
           "nombre" => "Carlos",
           "Lista de pedidos" => "",   
           "suscripcion" => "no",
        ],
        [
           "nombre" => "Mario",
           "Lista de pedidos" => "",           
           "suscripcion" => "no",
        ],
        [
           "nombre" => "Jose",
           "Lista de pedidos" => "",           
           "suscripcion" => "si",
        ],
    ];

    $pedidos = [
        [
            "Listado de artículos" => "lámpara, radiador, plancha",
            "Precio del pedido completo" => "130€"
        ],
        [
            "Listado de artículos" => "television",
            "Precio del pedido completo" => "270€"
        ],
    ];
    ?>
    
    <?php
            $nuevaLista = array_filter ($libros, function ($libro) {
            return $libro['autor'] === 'Maluma';
        });
    ?>