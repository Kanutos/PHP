<html>
<head>
    <meta charset="utf-8">
    <title>INSERCION DE DATOS</title>
</head>
<body>
    <?php
    //En este codigo es donde realizamos el update del resultado devuelto por  "39-Pagina_resultado_act
    //

    $id=$_GET["Id"];

    $nombre=$_GET["Nombre"];

    $altura=$_GET["Altura"];

    $peso=$_GET["Peso"];
  
     require("datos_conexion.php");
  
     $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
  
     if(mysqli_connect_errno()){
  
         echo"Fallo al conectar con la BDD";
  
         exit();
     }
  
     mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");
  
     mysqli_set_charset($conexion, "utf8");
  //consulta query sobre la BDD
        $consulta="UPDATE POKEMON SET ID='$id?, Nombre='$nombre',Altura='$altura',Peso='$peso'"; //es un ejemplo
  
        $resultado= mysqli_query($conexion,$consulta);

        if($resultado ==false){

            echo "error en la consulta";

        }else{

 //muestra los registros guardados por pantalla
            echo"registro guardada<br><br>";

            echo"<table><tr><td>$id</td></tr>";

            echo"<tr><td>$nombre</td></tr>";

            echo"<tr><td>$altura</td></tr>";

            echo"<tr><td>$peso</td></tr></table>";
        }
  
      mysqli_close($conexion);  
  ?>

</body>
</html>