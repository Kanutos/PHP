<style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFC;
            padding: 5px;
            border: #666 5px solid;
        }

        .no_validado {
            font-size: 18px color: #F00;
            font-weight: bold;
        }

        .validado {
            font-size: 18px color: #0C3;
            font-weight: bold;
        }
    </style>
    
<?php

if(isset($_POST["enviando"]))

    $usuario = $_POST["contra"];
    $edad= $_POST["nombre_usuario"];

    /*if($usuario=="Juan" && $edad>=18){
        echo "<p class='validado'>Puedes entrar</p>";

    }else{

        echo"<p class=\"no_validado\">". "No Puedes entrar" . "</p>";
    }*/
    //SINTAXIS Condicion ? Valor si verdadero: Valor si falso, sirven para condicionales de cierto falso
    $rsultado = $edad<18 ? "Eres menor de edad. No puedes acceder" : "puedes acceder";
    $resultado = $nombre == "Juan" && $contra =="1234" ? "Puedes acceder" : "No puedes acceder";
    echo $resultado


?>