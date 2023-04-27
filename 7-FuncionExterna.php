<html>
<head>
    <meta charset="utf-8">
    <title>FUNCION EXTERNA</title>
</head>

<body>

<?php

    echo "Este es el primer mensaje <br>";
/* Con INCLUDE llamamos a ese fichero donde se encuentra la funcion DameDatos,
 en caso de que no exista o no encuentre el fichero el flujo de programa continuara*/
    include ("DameDatos.php");


/* Con REQUIRe llamamos a ese fichero donde se encuentra la funcion DameDatos,en caso de que no exista el 
flujo de programa el programa no se ejecutara directamente, al ser un requisito indispensable para su funcionamiento*/
    require ("DameDatos.php");

    echo "Este es el segundo mensaje <br>";

    DameDatos();//Se encuentra dentro del fichero

?>
</body>
</html>