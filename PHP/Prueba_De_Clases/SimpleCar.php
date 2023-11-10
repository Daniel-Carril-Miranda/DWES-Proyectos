<?php
    class SimpleCar {
        private $marca;
        private $modelo;
        private $nBas;
        
        // Constructor de SimpleCar
        public function __construct($marca, $modelo, $nBas) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->nBas = $nBas;
        }
     
        // Getter para la marca
        public function getMarca() {
            return $this->marca;
        }
     
        // Setter para la marca
        public function setMarca($marca) {
            $this->marca = $marca;
        }
     
        // Getter para el modelo
        public function getModelo() {
            return $this->modelo;
        }
     
        // Setter para el modelo
        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
     
        // Getter para el número de bastidor (nBas)
        public function getNBas() {
            return $this->nBas;
        }
     
        // Setter para el número de bastidor (nBas)
        public function setNBas($nBas) {
            $this->nBas = $nBas;
        }
    }
?>