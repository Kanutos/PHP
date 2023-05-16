<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
    <?php
    $pais=$_GET["buscar"];
    require("31-datos_conexion.php");
    $conexion=mysqli_connect($db_host,$db_nombre, $db_usuario, $db_contraseña);
    if(mysqli_connect_errno()){

        echo"Fallo al conectar con la BBDD";

        exit();
    }
    
   mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");


   mysqli_set_charset($conexion, "utf8");

   $sql="SELECT CODIGOARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE PAISDEORIGEN=?";   //paso1

   $resultado= mysqli_prepare($conexion, $sql);    //paso2

   $ok=mysqli_stmt_bind_param($resultado,"s",$pais);   //paso3

   $ok=mysqli_stmt_execute($resultado);//paso4

   if($ok==false){

    echo"Error al ejecutar la consulta";

   }else{

    $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);    //paso5
    
    echo "Articulos encontrados: <br><br>";

    while(mysqli_stmt_fetch($resultado)){    //paso6
 
        echo $codigo . " " . $seccion ." " . $precio . $pais . "<br>";
    }
    mysqli_stmt_close($resultado);
   }
   ?>
</body>
</html>