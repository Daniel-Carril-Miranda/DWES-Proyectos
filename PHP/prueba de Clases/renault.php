<?php
$renaultKoleos = new Coche("Renault", "Koleos", "1234567890", 2015, "blanco", "SonidoDelClaxonOriginal");

echo "Marca: " . $renaultKoleos->getMarca() . "<br>";
echo "Modelo: " . $renaultKoleos->getModelo() . "<br>";
echo "Año de Lanzamiento: " . $renaultKoleos->getAñoLanz() . "<br>";
echo "Color: " . $renaultKoleos->getColor() . "<br>";
 
// Cambia el color del coche a negro
$renaultKoleos->setColor("negro");
echo "Color después de pintarlo de negro: " . $renaultKoleos->getColor() . "<br>";
 
// Hace sonar el claxon

$renaultKoleos->sonarClaxon();
?>