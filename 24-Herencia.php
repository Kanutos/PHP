<!--Usamos la palabra extends para la herencia, php no tolera la herencia multiple--> 
<?php
//clase
    class Coche{
//propiedades
        protected $ruedas;//protected es un modificador para que las clases que heredan de esta, puedas acceder a sus propiedas
        var $color;
        var $motor;
        function Coche(){//metodo constructor para el estado inicial
// con el $this hacemos referencia a la propia clase, como su pusiera coche
            $this->ruedas=4;// con -> hacemos referencia al atributo
            $this->motor=1600;
            $this->color="";

        }
        function get_motor(){
            return $this->motor;
        }
        function get_ruedas(){
            return $this->ruedas;
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
        function set_color($color_coche, $nombre_coche){

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
