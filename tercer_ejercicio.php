<!--Hacer que salga un número aleatorio y que dependiendo del número que salga ponga si es par o impar.-->
<?php
$aleatorio=mt_rand(1,100);
$numero = 0;
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
echo $aleatorio;
if ($aleatorio % 2== $numero) {
    echo "<h1>"."PAR"."</h1>";
}
else
    echo "<h1>"."IMPAR"."</h1>";
?>
</body>
</html>