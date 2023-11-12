<?php
$libro1 = new Libro("Fray Perico, Calcertín y el Guerrillero Martín", "Antonio Tello", "9788434896086", 158);
$libro2 = new Libro("Lazarillo de Tormes", "Diego Hurtado de Mendoza", "9788497406826", 128);

$dvd1 = new DVD("Un ciudadano ejemplar", "F. Gary Gary", "9780792377996", "1h 49min", "Suspense/Crímen");
$dvd2 = new DVD("Stranger Than Fiction", "Mark Forster", "9780792381163", "1h 53min", "Acción");

$biblioteca = [$libro1, $libro2, $dvd1, $dvd2];
require "index.view.php";
