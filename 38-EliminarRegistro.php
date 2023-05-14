<html>
<head>
    <meta charset="utf-8">
    <title>ELIMINAR DATOS</title>
</head>
<body>
    <?php
    //variables que alamcenaran la informacion del formulario
    //$get rescata los datos de la url para la consulta
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
        $consulta="DELETE FROM POKEMON WHERE(id, Nombre, Altura) VALUES('$id','$nombre','$altura','$peso')"; 
  
        $resultado= mysqli_query($conexion,$consulta);

        if($resultado ==false){

            echo "error en la eliminacion";

        }else{

 //muestra los registros guardados por pantalla
            //echo"registro eliminado<br><br>";
            if(mysqli_affected_rows($conexion)==0){

                echo"no hay registros que eliminar con ese criterio";
            }else{

                echo"se han eliminado" . mysqli_affected_rows($conexion) . "registros";
            }
        }

      mysqli_close($conexion);  
  ?>

</body>
<h1> eliminar pokemon</h1>
<form name= "form1" method="get" action="38-eliminar_registro.php">
    <table border="0" align= "center">
        <tr>
            <td>id del pokemon</td>
            <td><label for="id"></label>
            <input type="text" name="id" id="id"></td>
        </tr>
        <tr>
            <td>nombre</td>
            <td><label for="nombre"></label>
            <input type="text" name="nombre" id="nombre"></td>
        </tr>
        <tr>
            <td>altura</td>
            <td><label for="altura"></label>
            <input type="text" name="altura" id="altura"></td>
        </tr>
        <tr>
            <td>peso</td>
            <td><label for="peso"></label>
            <input type="text" name="peso" id="peso"></td>
        </tr>
       
                        
</html>