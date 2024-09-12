<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nameCareer = $_POST['nameCareer'];
    $descriptionCareer = $_POST['descriptionCareer'];

    // Consulta para insertar una nueva carrera
    $query = "INSERT INTO Careers (name_career, description_career) VALUES (:name, :description)";

    try {
        // Preparar la consulta
        $stmt = $connection->prepare($query);
        // Vincular parámetros
        $stmt->bindParam(':name', $nameCareer);
        $stmt->bindParam(':description', $descriptionCareer);
        // Ejecutar la consulta
        $stmt->execute();

        // Redirigir a la lista de carreras
        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        // Manejar errores si ocurre alguno
        echo "Error al crear la carrera: " . $e->getMessage();
    }
}
?>