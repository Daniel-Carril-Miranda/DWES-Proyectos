<?php 
class Libro extends Material {
    private $numPaginas;

    public function __construct($titulo, $autor, $ISBN, $numPaginas) {
        parent::__construct($titulo, $autor, $ISBN);
        $this->numPaginas = $numPaginas;
    }

    public function getNumPaginas() {
        return $this->numPaginas;
    }

    public function setNumPaginas($numPaginas) {
        $this->numPaginas = $numPaginas;
    }

    public function __toString() {
        return parent::__toString() . " | Número de Páginas: $this->numPaginas";
    }
}
