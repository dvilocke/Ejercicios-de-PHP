<?php

#fusion  json_decode

$jsonContenido = '[
    {"nombre":"Miguel", "apellido":"Uh"},
    {"nombre":"Jose", "apellido":"Ramirez"}
    ]';

    $resultado = json_decode($jsonContenido);
    foreach ($resultado as $value) {
        echo ($value->nombre) . " " . ($value->apellido) . "<br/>";
    }

#fusion json_encode

$personas = array("Miguel"=>40, "jose"=>22);
$transformar = json_encode($personas);

$listica  = ["Miguel"=>1];

print_r(json_encode($listica));

print_r($transformar);

?>