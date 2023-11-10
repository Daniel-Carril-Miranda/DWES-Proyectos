<?php
class Coche extends SimpleCar {
    private $añoLanz;
    private $color;
    private $claxon;
    
    // Constructor de Coche
    public function __construct($marca, $modelo, $nBas, $añoLanz, $color, $claxon) {
        parent::__construct($marca, $modelo, $nBas);
        $this->añoLanz = $añoLanz;
        $this->color = $color;
        $this->claxon = $claxon;
    }
 
    // Getter para el año de lanzamiento
    public function getAñoLanz() {
        return $this->añoLanz;
    }
 
    // Setter para el año de lanzamiento
    public function setAñoLanz($añoLanz) {
        $this->añoLanz = $añoLanz;
    }
 
    // Getter para el color
    public function getColor() {
        return $this->color;
    }
 
    // Setter para el color
    public function setColor($color) {
        $this->color = $color;
    }
 
    // Getter para el sonido del claxon
    public function getClaxon() {
        return $this->claxon;
    }
 
    // Setter para el sonido del claxon
    public function setClaxon($claxon) {
        $this->claxon = $claxon;
    }
 
    // Método para hacer sonar el claxon
    public function sonarClaxon() {
        echo "Sonido del Claxon: " . $this->claxon . "<br>";
    }
}
?>