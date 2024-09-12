<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCareer = $_POST['idCareer'];

    $query = "DELETE FROM Careers WHERE id_career = :id";

    try {
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':id', $idCareer);
        $stmt->execute();

        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al eliminar la carrera: " . $e->getMessage();
    }
}
?>
