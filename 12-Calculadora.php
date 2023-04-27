<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
    </style>
<?php
     if(isset($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];
        calcular($operacion);
     }/*fuera de este ambito las variables definidas arriba no son visibles por eso 
     las declaramos como globales*/
     function calcular($calculo){
        if(!strcmp("Suma",$calculo)){

            global $numero1;
            global $numero2;

            echo "<p class='resultado'>El resultado es : " .($numero1 + $numero2);
        }

        if(!strcmp("Resta",$calculo)){

            global $numero1;
            global $numero2;
            echo "El resultado es : " .($numero1 - $numero2);
        }
   
        if(!strcmp("Multiplicacion",$calculo)){

            global $numero1;
            global $numero2;
            echo "El resultado es : " .($numero1 * $numero2);
        }
   
        if(!strcmp("Division",$calculo)){
            global $numero1;
            global $numero2;
            echo "El resultado es : " .($numero1 / $numero2);
        }
        
        if(!strcmp("Modulo",$calculo)){
            global $numero1;
            global $numero2;
            echo "El resultado es : " .($numero1 % $numero2);
        }
    }
    
?>