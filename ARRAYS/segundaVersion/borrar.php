<?php
session_start();
unset($_SESSION["colores"]);
header("location:lista.php");

//cierre completo, se carga toda la session
//unset($_SESSION);
//session_destroy();
?>