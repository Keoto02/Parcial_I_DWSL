<?php
// Incluir el archivo de conexión a la base de datos
include 'connection.php';

try 
{
    $idCareer = $_GET['id'];
    $action = $_GET['action'];

    // Preparar la consulta SQL para seleccionar la carrera por su ID
    $sql = "SELECT * FROM Careers WHERE id_career = :id";

    // Preparar la declaración SQL
    $stmt = $connection->prepare($sql);

    // Vincular el parámetro ID
    $stmt->bindParam(':id', $idCareer, PDO::PARAM_INT);

    // Ejecutar la consulta SQL
    $stmt->execute();

    // Obtener y devolver los datos de la carrera como un array asociativo
    $career = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($action == 'edit') {
        include '../Views/update_career.php';
    } else if ($action == 'delete') {
        include '../Views/delete_career.php';
    }
} catch (PDOException $e) {
    // Manejar cualquier error de conexión o consulta
    // Aquí puedes registrar el error, mostrar un mensaje al usuario, etc.
    echo "Error al obtener la carrera: " . $e->getMessage();
    return null;
}

?>
