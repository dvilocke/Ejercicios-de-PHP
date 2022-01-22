<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        la diferencia entre require y include es
        Según la documentación oficial de PHP: require es 
        idéntico a include excepto que en caso de fallo 
        producirá un error fatal de nivel E_COMPILE_ERROR . 
        En otras palabras, éste detiene el script mientras que 
        include sólo emitirá una advertencia ( E_WARNING ) 
        lo cual permite continuar el script.
    -->
    <?php
    require("funcionRequire_1.php");
    ?>
</body>
</html>