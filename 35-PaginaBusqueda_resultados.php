<html>
<head>
    <meta charset="utf-8">
    <title> FORMULARIO Y ENVIO DENTRO DEL MISMO FICHERO</title>
    <?php
    //Funcion donde la pasaremos el termino de busqueda que almacenara en el parametro, para usarlo dentro del query
function ejecuta_consulta($labusqueda){

   require("datos_conexion.php");

   $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

   if(mysqli_connect_errno()){

       echo"Fallo al conectar con la BDD";

       exit();
   }

   mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");


   mysqli_set_charset($conexion, "utf8");

      $consulta= "SELECT * FROM pokemon WHERE pokemon LIKE '%$labusqueda%'";//busqueda linea 9, % son valores comodin

      $resultado= mysqli_query($conexion,$consulta);

//para que nos saque la consulta en forma de tabla
    while($fila= mysqli_fetch_array($resultados,MYSQL_ASSOC)){//fila es un array asociativo

   echo "<table><tr><td>";//se puede poner con css

      echo $fila['nombre'] . "</td><td>";//cada campo lo mete en una celda
      echo $fila['Altura'] . "</td><td>";
      echo $fila['peso'] . "</td><td></tr></table>";
      echo"<br>";//para darle espaciado a la informacion
      echo"<br>";
    }
    mysqli_close($conexion);  
}  
?>
</head>
<body>

    <?php

    $mibusqueda = $_GET["buscar"];

    $mipag=$_SERVER["PHP_SELF"];

    if($mibusqueda!=NULL){

        ejecuta_consulta($mibusqueda);

    }else{

        echo("<form action='" . $mipag ."' method='get'>

        <label>Buscar:<input type='text' name='buscar'></label>

        <input type='submit' name='enviando' vale='Dale'>

        </form>");
    }
    
    ?>
  
</body>
</html>