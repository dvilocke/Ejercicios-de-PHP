<?php

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "hola, saludos";

$archivoACrear = fopen($nombreArchivo, "w");

fwrite($archivoACrear, $contenidoArchivo);
fclose($archivoACrear);

?>