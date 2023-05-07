</style>
<?php
if (isset($_POST["enviando"])){

    $edad= $_POST["edad_usuario"];

    $nombre= $_POST["nombre_usuario"];

    switch($nombre){

        case $nombre=="Juan" && $contra == "1234":

            echo "Usuario autorizado. Hola Juan";

            break;

        case $nombre=="Maria" && $contra=="6666":

            echo "usuario autorizado, Hola Maria";

            break;
    

        case $nombre=="Pedro" && $contra=="33333":
            echo "usuario autorizado, hola PETER";
    
            break;
        
        default:
        
        echo "Usuario no autorizado";
    }
}