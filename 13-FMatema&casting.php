<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Funciones matematicas y casting impicito(parseo)</title>
</head>

<body>
    <?php
    /*En php no hace falta especificar el tipo, lo entiende de manera implicito, de manera explicita se realiza como en 
    java expecificando el tipo delante entre parentesis(int)*/
    $num1 =rand();
    $num2 =rand(10.500);//rango de valores
    $num3 =pow(5,3);//Potencias
    $num4 = 5.25;

    echo" El numero es: " . $num1;
    echo" El numero es: " . $num2;
    echo" El numero es: " . $num3;
    echo" El numero es: " .  round($num4,2);//el segundo parametro = nºdecimales




?>
</body>
</html>