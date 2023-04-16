<?php
$modo="claro";
if (isset($_GET["modo"])){
    $color="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css";
}
else{
    $color="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$color?>">
</head>
<body>

<h1>Soy la siguiente página</h1>
<p>
    <a href="index.php">Volver a la principal</a>
</p>
</body>
</html>