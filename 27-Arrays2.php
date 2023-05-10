<html>
<head>
    <meta charset="utf-8">
    <title> ARRAYS 2</title>
</head>
<body>
    <?php
    
    $datos=array("Nombre"=>"Juan", "Apellido"=>"Gomez", "Edad"=>21);

    $datos["Pais"]= "España";//añade elemento en un array asociativo

//funcion booleana is_array
    if(is_array($datos)){

        echo "Es un Array";

    }else{

        echo"No es un Array";
    }

//Forma de recorre un array asociativo, tanto $clave como $valor las podemos nombrar como queramos
foreach($datos as $clave=>$valor){

    echo "A $clave le corresponde $valor <br>";
}

//Forma para recorrer un array indexado

$semana=array("Lunes","Martes","Miercoles","Jueves");

sort($semana);//Ordena la lista,antes de recorrer el bucle

for($i=0; $i<count($semana);$i++){

    echo $semana[$i] . "<br>";
}

    
?>
</body>
</html>