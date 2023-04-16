<?php
if (isset($_GET["nombre"]) && isset($_GET["password"])){
    $nombre=$_GET["nombre"];
    $password=$_GET["password"];
    if ($nombre == "usuario1" && $password == "12345"){
    //grabamos los datos en una cookie, el time es tiempo de caducidad de una cookie,  en este ejemplo es una semana
        setcookie("nombre",$nombre,time()+60*60*24*7);
        setcookie("password",$password,time()+60*60*24*7);
    }
    else{
        echo "hola";
        header("location:formulario1.php");
    }
}
else if (isset($_COOKIE["nombre"]) && isset($_COOKIE["password"])){
    $nombre=$_COOKIE["nombre"];
    $password=$_COOKIE["password"];
    //si usuario o contraseña no es válida nos echa del programa, esto sirve por si alguien crea una cookie para atacarnos
    if ($nombre != "usuario1" || $password != "12345"){
        //esto nos sirve para borrar una cookie, con el time hacemos que caduque enseguida
        setcookie("nombre",false,time()-1);
        setcookie("password",false,time()-1);
        header("location:formulario1.php");
    }
}
    else{
     header("location:formulario1.php");
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h1>Bienvenid@ <?=$nombre?></h1>

<!--este formulario te lleva a borrar.php para eliminar las cookies-->
<form action="borrar.php" method="get">
<button>Eliminar cookies</button>
</form>

</body>
</html>