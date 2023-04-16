<?php
setcookie("colores",false,time()-1);
header("location:lista.php");

//cierre completo, se carga toda la session
//unset($_SESSION);
//session_destroy();
?>