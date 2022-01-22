<?php


//abriendo un archivo para leer el contenido
$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo, "r");


//leer el contendio de un archivo
$contenido = fread($archivoAbierto, filesize($archivo));

echo $contenido;

?>