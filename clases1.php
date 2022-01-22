<?php
class Personaa{
    #propiedades - encapsulamiento(alcance de los datos)
    public $nombre; #atributo publico

    private $edad; #atributo privado -> unicamente desde la clase que lo tiene

    protected $altura; #atributo protected -> solo se puede acceder desde la misma clase y las clases heredadas

    #creacion del metodo
    public function asignarNombre($nuevoNombre){
        $this->nombre =  $nuevoNombre;
    }

    public function imprimirNombre(){
        echo $this->nombre;
    }

    public function mostrarEdad(){
        $this->edad = 22;
        return $this->edad;
    }

}

$objeto = new Personaa(); #instancia de una clase

#llamar a un metodo de una clase
$objeto->asignarNombre("Miguel");

echo $objeto->mostrarEdad();

?>