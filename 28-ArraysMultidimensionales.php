<html>
<head>
    <meta charset="utf-8">
    <title> Array multidimensional</title>
</head>
<body>
    <?php                          //
    $alimentos=array("Fruta"=>array("tropical"=>"Kiwi",
                                    "citrico"=>"Mandarina",
                                    "Otros"=>"Manzana"),

                     "Leche"=>array("animal" =>"vaca",
                                    "Vegetal"=>"coco"),

                     "carne"=>array("Vacuno" =>"Lomo",
                                    "Porcino"=>"Jamon"));

    //echo $alimentos["carne"]["vacuno"];
//necesitamos dos nombres para identificar la primera dimension, y otro para la segunda
   /* foreach($alimentos as $clave_alim =>$aim){

        echo "$clave_alim:<br>";

        while(list($clave,$valor)=each($alim)){

            echo "$clave=$valor<br>";
        }
        echo "<br>";
    }*/

    echo var_dump($alimentos);//la simplificacion de la parte de arriba, sirve para recorrer el array

?>
</body>
</html>