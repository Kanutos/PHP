<html>
<head>
    <meta charset="utf-8">
    <title>HERENCIA</title>
</head>
<body>
    <?php

    include ("vehiculos.php");

    $mazda = new Coche();

    $pegaso = new Camion();

    echo"El Mazda tiene" . $mazda->get_ruedas() . "ruedas<br>";
    echo "El pegaso tiene" . $pegaso->get_ruedas() . "ruedas<br>";    
    ?>
</body>
</html>