/*"Bucle for" sintaxis
for( iniciacion bucle ; condicion del bucle; incremento/decremento bucle);{ codigo que ejecuta en el bucle}*/
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Documento sin titulo</title>
</head>

<body>
    <?php

    for ($i = 0; $i <= 10; $i++) {

        echo "<p>bucle ascendente </p>";
    }

    for ($i = 10; $i >= 0; $i--) {

        echo "<p>bucle descendente </p>";
    }

    for ($i = 0; $i <= 20; $i+=2) {

        echo "<p> dentro bucle </p>";

            if($i==6){

                echo "<p> Interrumpimos el bucle</p>";

                break;// instruccion para finalizar el bucle en seco
            }  
    }
    for ($i = 10; $i>=0; $i--) {

        if($i ==0){

            echo " Division por 0 no es posible <br>";

            continue;//Instruccion para que salte una interacion al cumpli la condicion

        }
            echo "9/$i = " . 9/ $i . "<br>";
    }

        echo "<p> bucle ascendente </p>";
    

    ?>
</body>

</html>