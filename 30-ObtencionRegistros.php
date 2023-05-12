<html>
<head>
    <meta charset="utf-8">
    <title> Obtencion de resultados</title>
</head>
<body>
    <?php

    $db_host= "localhost";
    $db_nombre="pokemonDb";
    $db_usuario="root";
    $db_contraseña="";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre)
//funcion tratamiento errores
    if(mysqli_connect_errno()){

        echo"Fallo al conectar con la BDD";

        exir();
    }
//funcion para que conecte a una bdd concreta, ya que podemos tener varias BDD
    mysql_select_db($conexion, $db_nombre) or die( "No se encuentra la BDD");

//funcion para cambiar el idioma, para acentos y puntuacion de cada idioma
    mysqli_set_charset($conexion, "utf8");

       $consulta="SELECT * FROM pokemon";

       $resultado= mysqli_query($conexion,$consulta);

//esta seria una manera para recorrer todo mientras haya registros
// le estamos diciendo que se ejecute mientras contenga registros
     while(($fila= mysqli_fetch_row($resultados))==true){

       echo $fila[0];
       echo $fila[1];
       echo $fila[2];
       echo $fila[3];
       echo"<br>";
     }
     
//cierre de conexion, ya que es posible conectar a varias BDD dentro de un mismo programa
     mysql_close($conexion);
?>
</body>
</html>