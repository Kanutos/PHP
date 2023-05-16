<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>

    <?php
    //nombres de variables, no tienen por que llamarse igual que los campos del formulario
    $c_art=$_GET["c_art"];
    $secc=$_GET["secc"];
    $n_art=$_GET["n_art"];
    $pre=$_GET["pre"];
    $fec=$_GET["fec"];
    $imp=$_GET["imp"];
    $p_ori=$_GET["p_ori"];

    require("31-datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_nombre, $db_usuario, $db_contraseña);

    if(mysqli_connect_errno()){

        echo"Fallo al conectar con la BBDD";

        exit();
    }
    
   mysqli_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");

   mysqli_set_charset($conexion, "utf8");

   $sql="INSERT INTO PRODUCTOS(CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES(?,?,?,?,?,?,?)";   //paso1

   $resultado= mysqli_prepare($conexion, $sql);    //paso2

   $ok=mysqli_stmt_bind_param($resultado,"sssisid",$c_art,$secc,$n_art, $pre,$fec,$imp,$p_ori);   //paso3(mismo orden que arriba)las S I y D es el tipo de dato

   $ok=mysqli_stmt_execute($resultado);//paso4

   if($ok==false){

    echo"Error al ejecutar la consulta";

   }else{

   // $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);    //paso5
    
    echo "agregando nuevo registro";

    /*while(mysqli_stmt_fetch($resultado)){    //paso6
 
        echo $codigo . " " . $seccion ." " . $precio . $pais . "<br>";
    }*/
    mysqli_stmt_close($resultado);
   }
   ?>
</body>
</html>