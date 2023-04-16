<?php
if (isset($_GET["color"])){
    if (isset($_COOKIE["colores"])){
        $colores=json_decode($_COOKIE["colores"], true); //copio el array actual de colores, hay que poner json_decode(lo que recojo, true)
    }
    else{
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
    setcookie("colores",json_encode($colores),time()+60*60*24*7*30); //


    //de esta manera grabamos una session, la igualamos al valor que hayamos recibido por get y se crea la sesion
    //$_SESSION["color"]=$_GET["color"];
}
header("location:lista.php");
?>