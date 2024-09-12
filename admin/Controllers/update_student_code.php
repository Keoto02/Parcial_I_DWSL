<?php
    // Incluir archivo de conexión a la base de datos
    include 'connection.php';

    // Verificar si se recibió una solicitud POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $id = $_POST['id'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $code = $_POST['code'];
        $career = $_POST['career'];

        // Consulta para actualizar el estudiante en la base de datos
        $query = "UPDATE Students SET name_student = :name, last_name_student = :last_name, code_student = :code, id_career_student = :career WHERE id_student = :id";

        try {
            // Preparar la consulta
            $stmt = $connection->prepare($query);
            // Vincular parámetros
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':career', $career);
            // Ejecutar la consulta
            $stmt->execute();

            // Redirigir a la página de estudiantes
            header("Location: ../Views/index_student.php");
            exit();
        } catch (PDOException $e) {
            // Manejar errores si ocurre alguno
            echo "Error al actualizar el estudiante: " . $e->getMessage();
        }
    }
?>
