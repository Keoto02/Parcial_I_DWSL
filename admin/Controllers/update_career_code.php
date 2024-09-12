<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $idCareer = $_POST['idCareer'];
    $nameCareer = $_POST['nameCareer'];
    $descriptionCareer = $_POST['descriptionCareer'];

    // Consulta para actualizar una carrera
    $query = "UPDATE Careers SET name_career = :name, description_career = :description WHERE id_career = :id";

    try {
        // Preparar la consulta
        $stmt = $connection->prepare($query);
        // Vincular parámetros
        $stmt->bindParam(':name', $nameCareer);
        $stmt->bindParam(':description', $descriptionCareer);
        $stmt->bindParam(':id', $idCareer);
        // Ejecutar la consulta
        $stmt->execute();

        // Redirigir a la lista de carreras
        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        // Manejar errores si ocurre alguno
        echo "Error al actualizar la carrera: " . $e->getMessage();
    }
}
?>
