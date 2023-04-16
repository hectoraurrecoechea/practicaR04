<?php
session_start();
$color="";
if (isset($_SESSION["color"])){
    $color=$_SESSION["color"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de colores</title>
    <style>
        div{
            width: 150px;
            height: 150px;
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>lista de colores</h1>
<?php
if ($color){
    echo "<div style='background-color:$color'>"."&nbsp;</div>";
}
else{
    echo "<p>No hay colores elegidos</p>";
}
?>
<p><a href="colores.php">Elegir otro color</a></p>
</body>
</html>
