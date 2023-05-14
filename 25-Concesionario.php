<?php
//para una variable statica  la llamamos atraves del operador self::

    class Compra_vehiculo{

        private $precio_base;

        private static $ayuda=4500;//private impide modificar desde fuera
    }
    function Compra_vehiculo($gama){

    if($gama =="urbano"){

              $this->precio_base=10000;

    }else if ($gama=="compacto"){

             $this->precio_base=20000;

    }else if ($gama=="berlina"){

             $this->precio_base=40000;
    }
}//fin del constructor

static function descuento_ayuda(){//ejemplo haciendolo atraves de funcion

    if(date("m-d-y")> "05-01-23"){//formato fecha

    self::$ayuda=4500;
}

function climatizador(){

    $this->precio_base += 2000;
}

function navegador_gps(){

    $this->precio_base+=2500;
}
    
function tapiceria_cuero($Color){

    if($color=="blanco"){

        $this->precio_base+=3000;

    }

    else if($color=="beige"){

    $this->precio_base +=3500;

else{

    $this->precio_base+=5000;
    }
}

function precio_final(){

    $valor_final=$this->precio_base-self::$ayuda;

    return $this->precio_base;
    }
}
}
?>