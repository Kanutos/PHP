<html>
   <!--Usamos la palabra extends para la herencia, php no tolera la herencia multiple
 --> 
<head>
    <meta charset="utf-8">
    <title>HERENCIA</title>
</head>
<body>
<?php
//clase
    class Coche{
//propiedades
        var $ruedas;

        var $color;

        var $motor;
        function Coche(){//metodo constructor para el estado inicial
// con el $this hacemos referencia a la propia clase, como su pusiera coche
            $this->ruedas=4;// con -> hacemos referencia al atributo
            $this->motor=1600;
            $this->color="";

        }

        function arrancar(){
            echo "estoy arrancando<br>";
        }
        function girar(){
            echo "estoy girando<br>";
        }
        function frenar(){
            echo "estoy frenando<br";
        }
        function establece_color($color_coche){
            $this->color=$color_coche;
            echo"el color es " . $this->color . "<br>";

        }

    }

//-----------------------------------------------------------------------------------
//clase 2
class Camion extends Coche{
    //propiedades
            var $ruedas;
            var $color;
            var $motor;
            function Coche(){//metodo constructor para el estado inicial
    // con el $this hacemos referencia a la propia clase, como su pusiera coche
                $this->ruedas=8;// con -> hacemos referencia al atributo
                $this->motor=2600;
                $this->color="";
    
            }
    
        }
?>
</body>
</html>