<?php 
    if($_FILES){
        print_r($_FILES["archivo"]);
    }
?>
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
        si vamosa trabajar con imagenes debemos agregarle una propiedad a la etiqueta
        porque si lo hacemos asi sin la etiqueta con post solo estamos recibiendo
        el nombre del archivo

        enctype="multipart/form-data" esta propiedad html nos va a permitir eso
    -->
    <form action="" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>