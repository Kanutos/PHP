<html>
<head>
    <meta charset="utf-8">
    <title> Obtencion de resultados</title>
</head>
<body>
    <?php

    $db_host= "localhost";
    $db_nombre="pokemonDb";
    $db_usuario="root";
    $db_contraseña="";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre)

    if(mysqli_connect_errno()){

        echo"Fallo al conectar con la BDD";

        exir();
    }

    mysql_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");


    mysqli_set_charset($conexion, "utf8");

       $consulta="SELECT * FROM pokemon";

       $resultado= mysqli_query($conexion,$consulta);

//para que nos saque la consulta en forma de tabla
     while(($fila= mysqli_fetch_row($resultados))==true){
        echo "<table width='50%'><tr><td>";

       echo $fila[0] . "</td><td>";
       echo $fila[1]. "</td><td>";
       echo $fila[2]. "</td><td>";
       echo $fila[3]. "</td><td>";
       echo $fila[4]. "</td><td></tr></table>";
       echo"<br>";
       echo"<br>";
     }
     mysql_close($conexion);
?>
</body>
</html>