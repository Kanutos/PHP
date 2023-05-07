<html>

<head>
    <meta charset="utf-8">
    <title>PROGRAMACION ORIENTADA A OBJETOS DIVIDIDA</title>
</head>
<body>
    <?php

    include("22-POO-vehiculos.php");

    $mazda=new Coche();

    $pegaso= new Camion();

    echo "El mazda tiene" . $mazda->ruedas . "ruedas<br>";

    echo "El pegaso tiene" . $mazda->ruedas . "ruedas<br>";
?>
</body>
</html>