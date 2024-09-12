<?php
    include '../../conf/conf.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $code = $_POST['code'];
        $career = $_POST['career'];

        $query = "UPDATE Students SET name_student = :name, last_name_student = :last_name, code_student = :code, id_career_student = :career WHERE id_student = :id";

        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':career', $career);
            $stmt->execute();

            header("Location: ../Views/index_student.php");
            exit();
        } catch (PDOException $e) {
            echo "Error al actualizar el estudiante: " . $e->getMessage();
        }
    }
?>
