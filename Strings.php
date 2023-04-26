<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>STRINGS</title>
<style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
</style>
</head>

<body>
    <?php

    $variable1= "Casa";
    $variable2= "casa";

    $resultado = strcmp($variable1, $variable2);//Devuelve 1 si no no sson iguales. 0 si son iguales, compara 2 strings
    $resultado = strcasecmp($variable1, $variable2);//no diferencia entre mayusculas y minisculas

    if($resultado){//if(!$resultado){// inverso}
        echo "No coinciden";
    }else{
        echo "Coinciden";
    }

//no puede haber una comilla hija dentro de una padre, comillas simples dentro de comillas dobles o al reves, no del mismo tipo
    echo "<p class ='resaltar'>Esto es un ejemplo de frase </p>";

//Esta forma tambien es valida escapando del caracter con \"string \"
    echo "<p class =\"resaltar\">Esto es un ejemplo de frase </p>";

    $nombre = "juan";
// siempre con comillas dobles sino lo coge literal
    echo "Hola $nombre";

    
?>
</body>
</html>