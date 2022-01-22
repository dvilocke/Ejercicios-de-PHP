
<?php
#vamos hablar de herencia
class Animales{
    public $nombre;

    public function agregarNombre($nombre){
        $this->nombre = $nombre;
    }

    public function saludar(){
        echo "Hola, mi nombre es:" . $this->nombre . "\n";
    }
}

class Perro extends Animales{

    public function saludar()
    {
        echo "Hola, mi nombre es:" . $this->nombre . "y soy un perro\n";
    }

    public function ladrar(){
        echo "Wuah Wuah";
    }
}
$animal1 = new Animales();
$animal1->agregarNombre("Rodolfo");

$animal2 = new Perro();
$animal2->agregarNombre("Tomas");

$animal1->saludar();
$animal2->saludar();


$animal2->ladrar();


?>