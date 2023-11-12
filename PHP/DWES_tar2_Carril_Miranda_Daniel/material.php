<?php
class Material
{
    // Declaro propiedades privadas
    private $titulo;
    private $autor;
    private $ISBN;
    private $disponible; //Booleano

    // Constructor por defecto
    public function __construct($titulo, $autor, $ISBN)
    {
        $this ->titulo = $titulo;
        $this ->autor = $autor;
        $this ->ISBN = $ISBN;
        $this ->disponible = true;
    }
    // Getters
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getISBN(){
        return $this->ISBN;
    }
    public function getDisponible(){
        return $this->disponible;
    }
    // Setters 
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setISBN($ISBN){
        $this->ISBN = $ISBN;
    }
    public function setDisponible($disponible){
        $this->disponible = $disponible;
    }
    // MÉTODOS
    // Prestar
    public function prestar(){
        if ($this->disponible){
            $this->disponible = false;
            return "Material prestado exitosamente";
        } else {
            return "No se puede prestar el material porque no está disponible";
        }
    }
    // Devolver
    public function devolver(){
        if (!$this->disponible){
            $this->disponible = true;
            return "material devuelto exitosamente";
        } else {
            return "El material no se puede devolver porque no está prestado";
        }
    }
    // Sacar por pantalla
    public function __toString() {
        return "Titulo: $this->titulo | Autor: $this->autor | ISBN: $this->ISBN | Disponible: " . ($this->disponible ? 'Sí' : 'No');
    }
}
require "index.view.php";
