<?php
include_once "conexion.php";  //OBLIGATORIO. sirve para copiar el texto que hay en conexion.php
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
try {
    $con = getConexion(); //tenemos conexion
    echo "<p>Conexión correcta</p>";
    $sql="SELECT id_palabra,palabra FROM palabras";
    $st=$con->prepare($sql);
    //si hubiera interrogaciones_ $st->bind_para,
    $st->execute();
    $st->bind_result($id_palabra,$palabra); //nos la acabamos de inventar las variables
    while ($st->fetch()){
        echo "<p>Palabra nº: $id_palabra, $palabra";
    }
    $st->close();
    $con->close();//cierra la conexión
}
catch (mysqli_sql_exception $e){ //si llego al catch es que ha habido error
    $error = mensajeErorr($e->getCode());
    echo "<p>Error: $error</p>";
}
?>
</body>
</html>
