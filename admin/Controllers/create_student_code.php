<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameStudent = $_POST['nameStudent'];
    $lastNameStudent = $_POST['lastNameStudent'];
    $codeStudent = $_POST['codeStudent'];
    $careerStudent = $_POST['careerStudent'];

    $sql = "INSERT INTO Students (name_student, last_name_student, code_student, id_career_student) VALUES (:name, :lastName, :code, :career)";

    try {
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $nameStudent);
        $stmt->bindParam(':lastName', $lastNameStudent);
        $stmt->bindParam(':code', $codeStudent);
        $stmt->bindParam(':career', $careerStudent);
        $stmt->execute();

        header("Location: ../Views/index_student.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al crear el estudiante: " . $e->getMessage();
    }
}
?>
