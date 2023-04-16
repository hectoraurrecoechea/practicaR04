<?php
session_start();
if (isset($_GET["color"])){
    if (isset($_SESSION["colores"])){
        $colores=$_SESSION["colores"]; //copio el array actual de colores
    }
    else{
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
    $_SESSION["colores"]=$colores;


    //de esta manera grabamos una session, la igualamos al valor que hayamos recibido por get y se crea la sesion
    //$_SESSION["color"]=$_GET["color"];
}
header("location:lista.php");
?>