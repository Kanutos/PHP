<html>
<head>
    <meta charset="utf-8">
    <title> Documento sin titulo</title>
</head>
<body>
    <?php
//conexion por procedimiento a traves de funcion
    $db_host= "localhost";
    $db_nombre="pokemonDb";
    $db_usuario="root";
    $db_contraseña="";

//la funcion pide los parametros de arriba
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre)

//creamos una variable para realizar la consulta
       $consulta="SELECT * FROM pokemon WHERE altura=>10";

//para ejecutar la consulta,resultset es como una tabla virtual en memoria, donde carga lo que nos devuelve la consulta
       $resultado= mysqli_query($conexion,$consulta);
       
//funcion para ver la informacion del resultset, la mira fila a fila, es un ARRAY
       $fila= mysqli_fetch_row($resultado);

       echo $fila[0];
       echo $fila[1];
       echo $fila[2];
       echo $fila[3];

?>
</body>
</html>