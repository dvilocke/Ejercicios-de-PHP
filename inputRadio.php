<?php

$txtNombre = "";
$rdgLenguaje = "";

if($_POST){
    $txtNombre = (isset($_POST["txtNombre"])) ?  $_POST["txtNombre"]: "" ;
    $rdgLenguaje = (isset($_POST["lenguaje"])) ?  $_POST["lenguaje"]: "" ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario inputTextt</title>
</head>
<body>
    <?php if($_POST){?>
        <strong>Hola</strong>: <?php echo $txtNombre;?>
        <strong>Lenguaje Favorito</strong>: <?php echo $rdgLenguaje;?>
    <?php }?>

    <form action="inputRadio.php" method="post">

        Nombre:
        <br/>
        <input type="text" name="txtNombre" id="" value=<?php echo $txtNombre; ?>>

        <br/>
        <br/>

        ¿Te gusta?:<br/>
        <br/>php:<input type="radio" <?php echo ($rdgLenguaje=="php") ? "checked": ""?> name="lenguaje" id="" value="php"><br/>
        <br/>python:<input type="radio" <?php echo ($rdgLenguaje=="python") ? "checked": ""?> name="lenguaje" id="" value="python"><br/>
        <br/>js:<input type="radio" <?php echo ($rdgLenguaje=="js") ? "checked": ""?> name="lenguaje" id="" value="js"><br/>

        <br/>

        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>