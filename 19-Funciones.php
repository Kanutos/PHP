<html>
<head>
    <meta charset="utf-8">
    <title> FUNCIONES</title>
</head>
<body>
    <?php
/*las funciones sirven para automatizar tareas, esto permite eliminar codigo repetitivo en los programas
existen 2 tipos
-Funciones predefinidas: vienen con el lenguaje PHP (strtlower,ucwords)
-Funciones propias: las crea el programador con el objetivo de reutilizarlas*/

  /* $palabra = "Juan";

   echo(strtolower($palabra));

   echo(strtoupper($palabra));

        function suma($num1,$num2 ){

            $resultado=$num1 + $num2;

            return $resultado;
        }

        echo (suma(5,7));*/
    function frase_mayus($frase, $conversion=true){

        $frase=strtolower($frase);

        if($conversion==true){

            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);

        }
        return $resultado;
    }
    
    echo(frase_mayus("esto es una prueba"));

?>
</body>
</html>