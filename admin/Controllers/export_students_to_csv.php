<?php
include "index_student_code.php";

// Nombre del archivo CSV
$filename = 'datos_estudiantes.csv';

// Encabezados CSV
$header = "ID,Nombre,Apellido,Codigo,Carrera\n";

// Contenido CSV
$csv = $header;
if (count($students) > 0) {
    foreach ($students as $student) {
        $csv .= $student['id_student'] . ',' . $student['name_student'] . ',' . $student['last_name_student'] . ',' 
        . $student['code_student'] . ',' . $student['name_career'] ."\n";
    }
}

// Descargar archivo CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $csv;
exit();

?>
