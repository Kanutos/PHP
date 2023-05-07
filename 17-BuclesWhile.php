/* Los bucles son estructuras repetitivas, repiten el codigo en su interio
Existen 2 tipos:
-Bucles indeterminados: While y do-while(cuando no sabemos el numero de iteraciones)
-Bucles determinados: for(sabemos el numero de iteraciones)*/

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <?php

    $var1 = 1;

   // while ($var1 < 6) {
    do{//ejemplo bucle do while
        
        echo "Estamos ejecutando el codido del bucle <br>";

        $var1++;

    }while ($var1 < 6);//comentar hasta corchete

    echo "hemos salido del while"
        ?>
</body>

</html>