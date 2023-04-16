<?php
$texto = "";
if (isset($_POST["texto"])){
    $texto=$_POST["texto"];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body>
<h1>Texto interminable</h1>
<form action="index.php" method="post">
    <label for="texto">Texto</label>
    <textarea name="texto" id="texto"></textarea><br>
    <textarea name="texto2" id="texto"><?=$texto?></textarea><br>
    <button>Enviar</button>
    <section id="resultado"></section>
    <br>
</form>
<section id="resultado">
    <?php
        while ($texto){
        echo "<p>".$texto."</p>";
        return;
    }
    ?>
</section>
</body>
</html>