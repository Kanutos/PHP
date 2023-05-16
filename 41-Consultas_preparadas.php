/*Las principales ventajas son, que evitan las inyecciones sql y que este tipo de consultas se ejecutan de manera mas eficiente
como desventajas, que son mas complejas y que requiere conocer las funciones para poder realizar estas consultas
Los paso a seguir son:

1-Creamos la sentencia SQL sustituyendo los valores de criteros por el simbolo ? 
        ej; sql= select* from productos where pais de origen = ?;

2-Preparamos la consulta con la funcion mysqli_prepare(). Esta funcion requiere dos parametros:el objeto conexion y la sentencia sql.
$resultado =mysqli_prepare($conexion,$sql). La funcion devuelve ibjeto de tipo mysqli_stmt.

3-Unimos los parametro a la sentecia sql,. De esto se encarga la funcion mysqli_stmt_blind_param(). Devuelve true o false
Esta funcion requiere tres parametros: el objeto mysqli_stmt(devuelto por mysqli_prepare), el tipo de dato que se usara como criterio en sql,
variable con criterio

4-Ejecutar la consulta con la funcion mysqli_stmt_execute(). Esta funcion devuelve true o false. 
Necesita como parametro el objeto mysqli_stmt

5-Asociar variables al resultado de la consulta. Esto lo conseguimos con la funcion mysqli_stmt_blind_result(). Devuelve true o false
Necesitas como parametro el objeto mysqli_stmt y tantas variables como columnas en consulta sql.

6-Lectura de valores. Para ello utilizamos la funcion mysqli_stmt_fetch.
Pide como parametro el objeto mysqli_stmt

*/
<html>
<head>
    <meta charset="utf-8">
    <title> Formulario para consultas preparadas</title>
</head>
<body>
    <form action= "41-resultados_paises.php methods="get">
    <label>introduce pais:<input type="text" name="buscar"></label>
    <input type="submit" name="enviando" value="Dale">
</form>

</body>
</html>