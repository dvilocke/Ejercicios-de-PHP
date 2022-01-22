<?php
#vamos hablar del constructor de la clase y metodos estaticos
class Persona{
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrarEdad(){
        return $this->edad;
    }

    public static function obtenerNombreCreador(){
        echo "Creador:Miguel Angel";
    }
   
}

$persona1 = new Persona("Miguel", 22);

echo $persona1->mostrarEdad();

#forma de acceder a un metodo estatico, no hay necesidad
#de instanciar la clase
Persona::obtenerNombreCreador();

?>