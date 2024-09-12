<?php
    include 'connection.php';

    // Consulta para obtener los registros de carreras
    $query = "SELECT * FROM Careers";

    try {
        // Preparar la consulta
        $stmt = $connection->prepare($query);
        // Ejecutar la consulta
        $stmt->execute();
        // Obtener los resultados
        $careers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejar errores si ocurre alguno
        echo "Error al ejecutar la consulta: " . $e->getMessage();
    }
?>
