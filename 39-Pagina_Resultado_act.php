<html>
<head>
    <meta charset="utf-8">
    <title> Pagina Resultado</title>
</head>
<body>
    <?php
    /*Aqui se realiza la busqueda de algun elemento de la tabla
    cuando se complete nos abrira la pagina actulaizar donde podremos
    realizar un UPDATE con los datos de la consulta*/

    $busqueda= $_GET["buscar"];//almacena lo que pongamos en el cuadro de texto

       require("datos_conexion.php");

       $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
   
       if(mysqli_connect_errno()){
   
           echo"Fallo al conectar con la BDD";
   
           exit();
       }
   
       mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");
   
       mysqli_set_charset($conexion, "utf8");

       $consulta= "SELECT * FROM pokemon WHERE pokemon LIKE '%$busqueda%'";
   
          $resultados= mysqli_query($conexion,$consulta);

          while($fila= mysqli_fetch_array($resultados,MYSQL_ASSOC)){

       echo"<form action='39-Actualizar.php' method='get'>";

       echo"<input type ='text' name='id' value='" . $fila['id'] . "'><br>";

       echo"<input type ='text' name='nombre' value='" . $fila['nombre'] . "'><br>";

       echo"<input type ='text' name='altura' value='" . $fila['altura'] . "'><br>";

       echo"<input type ='text' name='peso' value='" . $fila['peso'] . "'><br>";

       echo"<input type ='submit' name='enviando' value='Actualizar¡'>";
       
       echo"</form>";

        }

        mysqli_close($conexion);    
?>
</body>
</html>