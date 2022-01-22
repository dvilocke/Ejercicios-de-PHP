<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkpython = "";
$chkjs = "";


if($_POST){
    $txtNombre = (isset($_POST["txtNombre"])) ?  $_POST["txtNombre"]: "" ;
    $rdgLenguaje = (isset($_POST["lenguaje"])) ?  $_POST["lenguaje"]: "" ;

    $chkphp = isset($_POST["chkphp"]) ? "checked" :  "";
    $chkpython = isset($_POST["chkpython"])  ? "checked" :  "";
    $chkjs = isset($_POST["chkjs"]) ? "checked" :  "";


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

    <form action="inputCheckBox.php" method="post">

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

        Estás aprendiendo....<br/>

        <br/>php:<input type="checkbox" name="chkphp" id="" value="si" <?php echo $chkphp ?>>
        <br/>python:<input type="checkbox" name="chkpython" id="" value="si"  <?php echo $chkpython ?>>
        <br/>js:<input type="checkbox" name="chkjs" id="" value="si"  <?php echo $chkjs ?>>

        <br/>

        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>