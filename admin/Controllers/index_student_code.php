<?php

$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}

include '../../conf/conf.php';
    $query = "SELECT S.id_student, S.name_student, S.last_name_student, S.code_student, C.name_career
    FROM Students S
    INNER JOIN Careers C ON S.id_career_student = C.id_career
    WHERE S.name_student LIKE '%$search%'
    OR S.last_name_student LIKE '%$search%'
    OR C.name_career LIKE '%$search%'";

try {
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al obtener la lista de estudiantes: " . $e->getMessage();
}
