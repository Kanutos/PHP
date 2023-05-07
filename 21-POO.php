<html>
    <!--Un objeto tiene propiedades(atributos): Color, Peso, Alto, Largo
    tine un comportamiento (¿que es capaz de hacer?): Frenar, acelerar, aparcar
    CLASE=modelo donde se redactan las caracteristicas comunes de un grupo de objetos
    INSTANCIA= creacion de un objeto de la clase-->
<head>
    <meta charset="utf-8">
    <title>PROGRAMACION ORIENTADA A OBJETOS</title>
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
            echo"el color de " . $nombre_coche . "es" . $this->color . "<br>";

        }

    }
//objeto
    $renault = new Coche();

    $seat= new Coche();

    $mazda = new Coche();

    $mazda->girar();//llamada a la funcion

    $renault->establece_color("Rojo","renault");

    $mazda->establece_color("Azul","mazda");

    echo $mazda-> ruedas;

?>
</body>
</html>