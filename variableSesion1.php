<?php

session_start();

if(isset($_SESSION["usuario"])){
    echo "Hola:" . $_SESSION["usuario"];
}else{
    echo "Nadie inicio session";
}


?>