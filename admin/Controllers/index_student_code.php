<?php

    // Incluir archivo de conexión a la base de datos
    include 'connection.php';
    $query = "SELECT Students.id_student, Students.name_student, Students.last_name_student, Students.code_student, Careers.name_career 
            FROM Students 
            LEFT JOIN Careers ON Students.id_career_student = Careers.id_career";

    try {
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error al obtener la lista de estudiantes: " . $e->getMessage();
    }
?>