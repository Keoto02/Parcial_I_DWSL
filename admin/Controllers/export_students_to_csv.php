<?php
include "index_student_code.php";

$filename = 'datos_estudiantes.csv';

$header = "ID,Nombre,Apellido,Codigo,Carrera\n";

$csv = $header;
if (count($students) > 0) {
    foreach ($students as $student) {
        $csv .= $student['id_student'] . ',' . $student['name_student'] . ',' . $student['last_name_student'] . ',' 
        . $student['code_student'] . ',' . $student['name_career'] ."\n";
    }
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $csv;
exit();

?>
