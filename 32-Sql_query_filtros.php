<html>
<head>
    <meta charset="utf-8">
    <title> Obtencion de resultados</title>
</head>
<body>
    <?php

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

    if(mysqli_connect_errno()){

        echo"Fallo al conectar con la BDD";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");


    mysqli_set_charset($conexion, "utf8");

       $consulta= "SELECT * FROM pokemon WHERE Altura=>10";

       $resultado= mysqli_query($conexion,$consulta);

//para que nos saque la consulta en forma de tabla
     while($fila= mysqli_fetch_row($resultados)){//fila es un array indexado

    echo "<table width='50%' align='center'><tr><td>";//se puede poner con css

       echo $fila[0] . "</td><td>";//cada campo lo mete en una celda
       echo $fila[1] . "</td><td>";
       echo $fila[2] . "</td><td>";
       echo $fila[3] . "</td><td>";
       echo $fila[4] . "</td><td></tr></table>";
       echo"<br>";//para darle espaciado a la informacion
       echo"<br>";
     }
     mysqli_close($conexion);
?>
</body>
</html>