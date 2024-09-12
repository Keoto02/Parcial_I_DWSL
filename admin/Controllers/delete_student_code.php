<?php
include '../../conf/conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idStudent'])) {
    try {
        $idStudent = $_POST['idStudent'];

        $sql = "DELETE FROM Students WHERE id_student = :id";

        $stmt = $connection->prepare($sql);

        $stmt->bindParam(':id', $idStudent, PDO::PARAM_INT);

        $stmt->execute();

        header("Location: ../Views/index_student.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al eliminar el estudiante: " . $e->getMessage();
    }
} else {
    header("Location: ../Views/index_student.php");
    exit();
}
?>
