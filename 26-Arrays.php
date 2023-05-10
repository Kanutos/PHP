<html><!--Los arrays son estructuras comunes a todos los lenguanjes de programacion, tambien llamados matrices,
 arreglos o vectores, normalmente los querys que realicemos se suelen almacenar en estas estructuras

Es un espacio donde podemos almacenar varios valores tanto numericos como cadenas, tenemos dos tipos:
-indexados: donde usamos indices para refererirnos a cada valor, siempre va entre corchetes el indice 
            ej; echo$mis_numeros[2]
-Asociativos: en esta ocasiones usamos nombres donde asociamos las posiciones en vez de numeros
            ej; echo$mis_numeros["valores3"]
-->    
<head>
    <meta charset="utf-8">
    <title> ARRAYS PHP</title>
</head>
<body>
    <?php

//php permite obviar el valor numerico en el indice
    $semana[]="Lunes";

    $semana[]="Martes";

    $semana[]="Miercoles";

    $semana[]="Jueves";

    echo $semana[1];

    $semana=array("Lunes","Martes","Miercoles","Jueves");

//Indice asociativo, tenemos que tener cuidado con repetir nombres a lo largo del programa

    $datos=array("Nombre"=>"Juan", "Apellido"=>"Gomez", "Edad"=>21);

    echo $datos["Apellido"];


?>
</body>
</html>