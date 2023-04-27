<html>

<head>
    <meta charset="utf-8">
    <title>VARIABLE ESTATICA</title>
</head>

<body>
    <?php

    function incrementaVariable(){
//Se declara una variable estatica cuando nos interesa que mantenga el valor dentro de la funcion
        static $contador =0;

        $contador++;

        echo $contador . "<br>";   

    }
    /*Cuando una funcion termina, se resetean los valores,a iniciales, en este caso si no volvieramos
    statica la variable contador, volveria a 0, su valor inical
    nos imprimiria 4 veces 1 en las llamadas a estas funciones */

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    
?>
</body>
</html>