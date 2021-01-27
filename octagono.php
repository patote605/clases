<html>
<head><title>Calculo del area de un octagono regular</title></head>
<body>
<?php
 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

    $perimetro = $_POST['perimetro'];
    $apotema = $_POST['apotema'];
    $area = null;

    if(!empty($perimetro) or !empty($apotema)) {

        echo "<h2 align='center'>Calculo del area de un octagono regular</h2>";

        $area = ($perimetro * $apotema) / 2 ;


        echo "<br>perimetro: " . $perimetro;
        echo "<br>apotema: " . $apotema;
        echo "<br/><br/>";
        echo "<br>Area del octagono: " . $area;
        echo "<br/><br/>";
        echo "<a href='datos.html'>Regresar</a>";
    }
} 
?>
 </body>
 </html>




