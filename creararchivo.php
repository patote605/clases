<?php
$ar=fopen("programacion web.txt", "w");
$ar2=$_REQUEST['texto'];
$ft=fopen("$ar2.txt", "w");
$texto="este archivo cambia de nombre pero el contenido es el mismo";
$dir= "carpeta jorge";
$dir2=$_REQUEST['directorio'];

mkdir($dir2);
if(!is_dir($dir)) {
    mkdir($dir);
    echo "la caprpeta se creo con exito";
    echo "<br>";
} else{
    echo "$dir ya existe";
    echo "<br>";
}

$asu=$_REQUEST['asunto'];

fwrite($ft,$texto);
fwrite($ar,$asu);
fclose($ar);

echo "los archivo se crearon correctamente";


?>