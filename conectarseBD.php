<?php
#insertar en la base de datos
$server = "localhost"; //127.0.0.1
$usuario = "root";
$clave = "";

try{
    #una clase que permite conectarme a una bd
    $conexion = new PDO("mysql:host=$server;dbname=album", $usuario, $clave);

    #constante estatica
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'efddf', 'dfdfd')";

    $conexion->exec($sql);


}catch(PDOException $error){
    echo "conexion erronea" . $error;
}

?>