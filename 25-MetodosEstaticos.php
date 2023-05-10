<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> METODOS ESTATICOS</title>
</head>
<body>
    <?php
    //compra_vehiculo::$ayuda=10000;

    Compra_vehiculo::descuento_ayuda();
    
        include ("Concesionario.php");

        $compra_antonio = new Compra_vehiculo ("compacto");

        $compra_antonio->climatizador();

        $compra_antonio->tapiceria_cuero("blanco");

        echo $compra_antonio->precio_final();
//cada objeto tiene sus propios metodos de clase

        $Compra_ana=new Compra_vehiculo ("compacto");
        
        $Compra_ana->climatizador();

        $Compra_ana->tapiceria_cuero("rojo");

        echo $Compra_ana->precio_final();

?>
</body>
</html>