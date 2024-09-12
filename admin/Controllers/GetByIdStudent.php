<?php
    include '../../conf/conf.php';

    try 
    {
        if(isset($_GET['id']) && isset($_GET['action'])) {
            $idStudent = $_GET['id'];
            $action = $_GET['action'];

            $sql = "SELECT * FROM Students WHERE id_student = :id";

            $stmt = $connection->prepare($sql);

            $stmt->bindParam(':id', $idStudent, PDO::PARAM_INT);

            $stmt->execute();

            $student = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($action == 'edit') {
                include '../Views/update_student.php';
            } else if ($action == 'delete') {
                include '../Views/delete_student.php';
            }
        } else {
            echo "Error: Debes proporcionar un ID de estudiante y una acción.";
        }
    } catch (PDOException $e) {
        echo "Error al obtener al estudiante: " . $e->getMessage();
    }
?>
