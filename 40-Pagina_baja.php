<html>
<head>
    <meta charset="utf-8">
    <title> Pagina Resultado</title>
</head>
<body>
    <?php

//establecemos datos de conexion con la base de datos
       require("datos_conexion.php");
//conectamos
       $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
    
//Almacenamos datos del formulario, lo colocamos aqui por que coge conexion como parametro la siguiente funcion
    $usuario= mysqli_real_escape_string($conexion, $_GET["usuario"]);
    $contraseña= mysqli_real_escape_string($conexion, $_GET["contraseña"]);
  //la funcion mysqli_real_escape_string($conexion,$dato) Nos permite evitar las injeccion, 
  //evitando caracteres extraños o no teniendolos en cuenta a la hora de ejecutar la consulta 

       if(mysqli_connect_errno()){
   
           echo"Fallo al conectar con la BDD";
   
           exit();
       }
   
       mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");
   
       mysqli_set_charset($conexion, "utf8");
//buscamos en la consulta los elementos que coincidan
       $consulta= "DELETE FROM USUARIOS WHERE USUARIO= '$usuario' AND CONTRASEÑA='$contraseña'";
       //atraves de estas variables es donde podemos realizar el ataque inyeccion de SQL

       echo"$consulta<br><br>";

       mysqli_query($conexion,$consulta);

      if(mysqli_affected_rows($conexion)>0){//esta funcion nos permite ver si hay columnas afectadas por la consulta

        echo"Baja procesada";

       }else{

        echo "No se ha encontrado usuario";
       }
      /* if(mysqli_query($conexion,$consulta)){

         echo" Baja procesada";
       }*/
        mysqli_close($conexion);    
?>
</body>
</html>