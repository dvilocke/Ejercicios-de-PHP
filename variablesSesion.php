<?php


/*
sessiones
Nos va a servir para mantener informacion en todas las pagina,
digamos que una persona se loguea y yo necesito mantener la
informacion de esa persona

cuando cierre el navegador ahi pierdes la informacion en la
session
*/

session_start();

#variable de session
$_SESSION["usuario"] = "develoteca";
$_SESSION["estatus"] = "logueado";

echo "Sesión iniciada" . "\n";

echo $_SESSION["usuario"] . " estatus:" . $_SESSION["estatus"];

?>