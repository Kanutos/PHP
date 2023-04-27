<html>

<head>
    <meta charset="utf-8">
    <title> CONSTANTES Y PREDEFINIDAS</title>
</head>

<body>
    <?php
/*constantes PHP
-El nombre ha de ir en mayusculas(convenio)
-El nombre de las constantes no deben llevar el simbolo $
-Es obligatorio el uso de la funcion define() para definirlas
-El ambito de las constantes es global por defecto
-NO SE PUEDEN redefinir
-Solo pueden almacenar valores escalares(enteros,booleanos,strings, etc) valores que no 
se puedan reducir en partes mas pequeñas como un array*/

    
//el true nos permite modidificar el valor y que no diferencia entre minusculas y mayusculas
define("AUTOR","Juan",true);

    define("AUTOR", "Maria");

    echo AUTOR;
    // echo "El autor es : AUTOR"; ESTO NO LO PERMITE requiere concatenar
    echo "El autor es : " . AUTOR;
   // echo "El autor es : AUTOR"; ESTO NO LO PERMITE requiere concatenar

// CONSTANTES PREDEFINIDAS EN PHP
// tenemos varias, mirar en php.net
   echo"La linea de esta instruccion es: " . __LINE__ . "<br>";

   echo "Estamos trabajando con este fichero:" . __FILE__;
?>
</body>
</html>

