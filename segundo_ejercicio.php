<!--Hacer que salga un número aleatorio y que dependiendo del número que salga ponga un texto.-->
<?php
$aleatorio=mt_rand(1,3);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($aleatorio==1) {
    echo "Hola";
}
    else if ($aleatorio==2){
        echo "Que tal";
    }
    else
        echo "Hasta luego";

?>
</body>
</html>