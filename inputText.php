<?php

$txtNombre = "";

if($_POST){
    $txtNombre = (isset($_POST["txtNombre"])) ?  $_POST["txtNombre"]: "" ;
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
    <?php }?>

    <form action="inputText.php" method="post">

        Nombre:
        <input type="text" name="txtNombre" id="" value=<?php echo $txtNombre; ?>>

        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>