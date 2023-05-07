<html>
<head>
    <meta charset="utf-8">
    <title> FUNCIONES POR VALOR Y POR REFERENCIA</title>
</head>
<body>
    <?php
/*Paso de parametro por valor: quiere decir que el valor que pasamos esta encapsulado dentro de ella, quiere decir que solo
lo modifica dentro de la funcion, asi que el parametro enviado no se modifica fuera del bloque de la funcion
por valor = Function ejemplo($param){
        $param++;
paso de parametro por referencia crea un vinculo, una referencia, quiere decir que la funcion sabe lo que tiene fuera,si incrementas
el valor referenciado, modifica el parametro que le has pasado de manera global
        */
//ejemplo con numeros(cambiar el & para ver funcionamiento)
function incrementa(&$valor1){//simbolo ampersan para pasar por referncia
    $valor1++;
    return $valor1;
}        
$numero=5;

echo incrementa($numero) . "<br>";

echo $numero;

//ejemplo con Strings
function cambia_mayus(&$param){

    $param= strtolower($param);

    $param= ucwords($param);

    return $param;
}
$cadena = "HoLa MunDo";
echo cambia_mayus($cadena) . "<br>";

echo $cadena;

?>
</body>
</html>