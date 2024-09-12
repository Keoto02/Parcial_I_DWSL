<?php
include '../../conf/conf.php';

try 
{
    $idCareer = $_GET['id'];
    $action = $_GET['action'];

    $sql = "SELECT * FROM Careers WHERE id_career = :id";

    $stmt = $connection->prepare($sql);

    $stmt->bindParam(':id', $idCareer, PDO::PARAM_INT);

    $stmt->execute();

    $career = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($action == 'edit') {
        include '../Views/update_career.php';
    } else if ($action == 'delete') {
        include '../Views/delete_career.php';
    }
} catch (PDOException $e) {
    echo "Error al obtener la carrera: " . $e->getMessage();
    return null;
}

?>
