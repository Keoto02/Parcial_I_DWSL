<?php
include "index_code.php";

// Nombre del archivo CSV
$filename = 'datos_carreras.csv';

// Encabezados CSV
$header = "ID,Nombre,Descripcion\n";

// Contenido CSV
$csv = $header;
if (count($careers) > 0) {
    foreach ($careers as $career) {
        $csv .= $career['id_career'] . ',' . $career['name_career'] . ',' . $career['description_career'] . "\n";
    }
}

// Descargar archivo CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $csv;
exit();
?>
