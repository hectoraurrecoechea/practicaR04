<!--Sacamos 100 números aleatorios entre el 1 y el 100 con un bucle for, los pares seran rojos y los impares verdes-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .rojo{
            color:red;
        }
        .verde{
            color:green;
        }
    </style>
</head>
<body>
<?php
for($cont=1;$cont<=100;$cont++){
    $aleatorio=mt_rand(1,1000);
    if ($aleatorio % 2== 0) {
        echo "<p class='rojo'> $aleatorio</p>";
    }
    else
        echo "<p class='verde'> $aleatorio</p>";
}
?>

</body>
</html>
