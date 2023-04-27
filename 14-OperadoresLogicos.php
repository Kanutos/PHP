<html>

<head>
    <meta charset="utf-8">
    <title> Prioridades de operadores logicos</title>
</head>

<body>
    <?php

    $var1=true;
    $var1=false;
    $resultado = $var1 && $var2; // resultado = false
    $resultado = $var1 and $var2;// resultado = true

    if($resultado ==true){
        echo"Correcto";

    }else{
        echo"Incorrecto";
    }
?>
</body>
</html>