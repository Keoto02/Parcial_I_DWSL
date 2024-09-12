<?php
// create_student_code.php

// Incluir archivo de conexión a la base de datos
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nameStudent = $_POST['nameStudent'];
    $lastNameStudent = $_POST['lastNameStudent'];
    $codeStudent = $_POST['codeStudent'];
    $careerStudent = $_POST['careerStudent'];

    // Consulta para insertar un nuevo estudiante
    $sql = "INSERT INTO Students (name_student, last_name_student, code_student, id_career_student) VALUES (:name, :lastName, :code, :career)";

    try {
        // Preparar la consulta
        $stmt = $connection->prepare($sql);
        // Vincular parámetros
        $stmt->bindParam(':name', $nameStudent);
        $stmt->bindParam(':lastName', $lastNameStudent);
        $stmt->bindParam(':code', $codeStudent);
        $stmt->bindParam(':career', $careerStudent);
        // Ejecutar la consulta
        $stmt->execute();

        // Redirigir a la lista de estudiantes
        header("Location: ../Views/index_student.php");
        exit();
    } catch (PDOException $e) {
        // Manejar errores si ocurre alguno
        echo "Error al crear el estudiante: " . $e->getMessage();
    }
}
?>
