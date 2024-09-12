<?php
include "index_code.php";

$filename = 'datos_carreras.csv';

$header = "ID,Nombre,Descripcion\n";

$csv = $header;
if (count($careers) > 0) {
    foreach ($careers as $career) {
        $csv .= $career['id_career'] . ',' . $career['name_career'] . ',' . $career['description_career'] . "\n";
    }
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $csv;
exit();
?>
