<?php
session_start();
$colores="";
if (isset($_SESSION["colores"])){
    $colores=$_SESSION["colores"];
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
if ($colores){
    //print_r($_SESSION["colores"]); nos sirve para saber los espacios y valores del array
    foreach ($colores as $i=>$color) { //recorre un array de cosas y guarda cada elemento
        echo "<div style='background-color:$color'>" . "$i</div>";//$i nos va a servir para ver el valor del array, 0,1,2,3...
    }
}
else{
    echo "<p>No hay colores elegidos</p>";
}
?>
<p><a href="colores.php">Elegir otro color</a></p>
</body>
</html>
