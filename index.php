<?php
    $nombre = "Homero";
    $edad = "45";
    $altura = 1.7;
    if ( $nombre == "Moe") {
        //echo "Soy Homero";
        $mensaje = "Soy Homero";
    } else {
        //echo "No soy Homero";
        $mensaje = "No soy Homero";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA<h1/>
    <?php 
        echo $mensaje;
    ?>
</body>
</html>
