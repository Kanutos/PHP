<html>
<head>
    <meta charset="utf-8">
    <title> Comentarios, echo y print</title>
</head>

<body>
    <?php
//todas las variables empiezan con $ y terminan con ;
//PHP es flexible con el tipo de datos, los datos numericos no requieren de comillas
    $nombre ="Juan";

    $Edad= 18;
    
    print $nombre;
    
    print "El nombre del usuario es " . $nombre; //el punto(.) se usa para concatenar, es conveniente dejar espacion en blanco delante y detras
   
    print "El nombre del usuario es $nombre";

    print 'El nombre del usuario es $nombre';//la comilla simple imprime literalmente
/*La diferencia entre echo y print es que echo permite separar las variables por comas y print no
print es una funcion que siempre devuelve 1, y echo es una expresion regular*/
    echo $nombre, $edad;

    echo"El nombre es" . $nombre . "y tiene". $edad;
?>
</body>
</html>