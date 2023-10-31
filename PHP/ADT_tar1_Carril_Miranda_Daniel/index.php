<?php
    $cliente = [
        [
            "nombre" => "Jonás",
            "listaProductos" => [
                "listaArticulo" => "",
                "precioTotal" => 0
            ],
            "suscripcion" => true
        ],
        [
            "nombre" => "Jose",
            "listaProductos" => [
                "listaArticulo" => "CasoMoto", "GuantesMoto", "BotasMoto",
                "precioTotal" => 460.69
            ],
            "suscripcion" => false
        ],
        [
            "nombre" => "Sofía",
            "listaProductos" => [
                "listaArticulo" => "BotasMoto",
                "precioTotal" => 120.35
            ],
            "suscripcion" => true
        ],
        [
            "nombre" => "Luisa",
            "listaProductos" => [
                "listaArticulo" => "CascoMoto", "BotasMoto",
                "precioTotal" => 350.00
            ],
            "suscripcion" => true
        ],
        [
            "nombre" => "Lara",
            "listaProductos" => [
                "listaArticulo" => "CascoMoto",
                "precioTotal" => 220.70
            ],
            "suscripcion" => false
        ]
        ];

    require "index.view.php";
?>