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
<h1>Elije el modo de trabajo</h1>
    <form action="index.php" method="get">
        <input type="radio" name="modo" value="claro" >
        <label for="claro">Claro</label>
        <input type="radio" name="modo1" value="oscuro" >
        <label for="oscuro">Oscuro</label>
        <button>Enviar</button>
        <p>
            <a href="siguiente.php" <?=$color?>>Siguiente pagina</a>
        </p>
    </form>
<h1>TEXTO DE PRUEBA</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut commodi culpa doloremque est labore nihil, officiis sed. Ab autem deserunt dolor earum laudantium nulla placeat repellat repudiandae sunt velit?</p>
    <h1>TABLA DE PRUEBA</h1>
    <table>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
        <tr>
            <td>celda01</td>
            <td>celda02</td>
            <td>celda03</td>
            <td>celda04</td>
            <td>celda05</td>
            <td>celda06</td>
            <td>celda07</td>
            <td>celda08</td>
            <td>celda09</td>
            <td>celda10</td>
        </tr>
    </table>
</body>
</html>