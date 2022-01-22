<?php
#traer de la base de datos
$server = "localhost"; //127.0.0.1
$usuario = "root";
$clave = "";

try{
    #una clase que permite conectarme a una bd
    $conexion = new PDO("mysql:host=$server;dbname=album", $usuario, $clave);

    #constante estatica
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    #obtener la informacion
    $resultado = $sentencia->fetchAll();


    foreach ($resultado as $value) {
        var_dump($value["ruta"]);
    }

}catch(PDOException $error){
    echo "conexion erronea" . $error;
}

?>