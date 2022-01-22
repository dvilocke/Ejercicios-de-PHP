<?php
    if($_FILES){
        /*Recordar que la carpeta debe terner permiso de escritura y lectura*/
        $informacion = $_FILES["archivo"];
        move_uploaded_file($informacion["tmp_name"], $informacion["name"] );
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
    <form action="" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>