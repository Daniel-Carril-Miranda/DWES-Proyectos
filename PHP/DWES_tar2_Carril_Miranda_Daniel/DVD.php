<?php
class DVD extends Material {
    private $duracion;
    private $genero;

    public function __construct($titulo, $autor, $ISBN, $duracion, $genero) {
        parent::__construct($titulo, $autor, $ISBN);
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function __toString() {
        return parent::__toString() . " | Duración: $this->duracion | Género: $this->genero";
    }
}
