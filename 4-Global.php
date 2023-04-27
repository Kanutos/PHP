<html>
<head>
    <meta charset="utf-8">
    <title> Ambitos variable</title>
</head>

<body>
    <?php

    $nombre="Juan";//imprime Juan por que en ningun momento accede a la funcion

    function dameNombre(){
        /*en PHP tenemos ambitos muy diferentes esto es asi para que no te sobreescriba al llamar a otro archivo que incluya
        una variable con el mismo nombre, para poder usar una variable dentro de una funcion la tendremos que convertir en global*/

        global $nombre;//Realiazr dentro de la funcion para hacer global la variable que se encuentra fuera

        $nombre = "Maria"; //esta variable nombre

    }
    dameNombre();

    echo $nombre;
    
?>
</body>
</html>