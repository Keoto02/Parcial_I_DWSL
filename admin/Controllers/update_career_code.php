<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCareer = $_POST['idCareer'];
    $nameCareer = $_POST['nameCareer'];
    $descriptionCareer = $_POST['descriptionCareer'];

    $query = "UPDATE Careers SET name_career = :name, description_career = :description WHERE id_career = :id";

    try {
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':name', $nameCareer);
        $stmt->bindParam(':description', $descriptionCareer);
        $stmt->bindParam(':id', $idCareer);
        $stmt->execute();

        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al actualizar la carrera: " . $e->getMessage();
    }
}
?>
