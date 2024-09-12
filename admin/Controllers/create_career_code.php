<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameCareer = $_POST['nameCareer'];
    $descriptionCareer = $_POST['descriptionCareer'];

    $query = "INSERT INTO Careers (name_career, description_career) VALUES (:name, :description)";

    try {
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':name', $nameCareer);
        $stmt->bindParam(':description', $descriptionCareer);
        $stmt->execute();

        header("Location: ../Views/index_career.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al crear la carrera: " . $e->getMessage();
    }
}
?>