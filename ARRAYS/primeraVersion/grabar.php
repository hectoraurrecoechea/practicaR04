<?php
session_start();
if (isset($_GET["color"])){
    //de esta manera grabamos una session, la igualamos al valor que hayamos recibido por get y se crea la sesion
    $_SESSION["color"]=$_GET["color"];
}
header("location:lista.php");

?>