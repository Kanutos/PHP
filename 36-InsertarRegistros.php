<html>
<head>
    <meta charset="utf-8">
    <title>INSERCION DE DATOS</title>
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
  
        $consulta="INSERT INTO POKEMON(id, Nombre, Altura) VALUES('152','totodile','1.50')"; 
  
        $resultado= mysqli_query($conexion,$consulta);
  
      mysqli_close($conexion);  
  ?>
</body>
</html>