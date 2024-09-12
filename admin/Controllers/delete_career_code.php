<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID de la carrera a eliminar
    $idCareer = $_POST['idCareer'];

    // Consulta para eliminar una carrera
    $query = "DELETE FROM Careers WHERE id_career = :id";

    try {
        // Preparar la consulta
        $stmt = $connection->prepare($query);
        // Vincular parámetros
        $stmt->bindParam(':id', $idCareer);
        // Ejecutar la consulta
        $stmt->execute();

        // Redirigir a la lista de carreras
        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        // Manejar errores si ocurre alguno
        echo "Error al eliminar la carrera: " . $e->getMessage();
    }
}
?>
