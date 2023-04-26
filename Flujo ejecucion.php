<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
?>

<?php
/*El flujo de ejecucion siempre va de arriba abajo, es importante cuando entran en juego estructuras que rompen con el lujo de 
ejecucion del programa, se dice esto por que una funcion no ejecuta el codigo en su interior hasta que es llamada, todo lo que 
este dentro de los corchetes de la funcion no se ejecutaran sino se llama a la funcion*/
    echo "Este es el primer mensaje <br>";

//sintaxis funciones PHP 
    function dameDatos(){

        echo "Este es el  mensaje interno de la funcion <br>";

    }
//llamaremos, vuelve arriba y continua su flujo, es decir, realizara la instruccion y una vez ejecutada continuara 
    dameDatos();

    echo "Este es el segundo mensaje <br>";

    /*dameDatos();
    dameDatos();
    dameDatos();
    dameDatos();*/
?>
</body>
</html>