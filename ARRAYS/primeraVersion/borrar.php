<?php
session_start();
unset($_SESSION["color"]);
header("location:lista.php");

//cierre completo, se carga toda la session
//unset($_SESSION);
//session_destroy();
?>