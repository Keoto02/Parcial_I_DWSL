<?php
session_start();
if ($_SESSION['user'] == "") {
    header("Location: ../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Eliminar Estudiante</h1>
    <p>¿Estás seguro de que deseas eliminar al estudiante "<?php echo $student['name_student']; ?> <?php echo $student['last_name_student']; ?>"?</p>
    <form action="../Controllers/delete_student_code.php" method="POST">
        <input type="hidden" name="idStudent" value="<?php echo $student['id_student']; ?>">
        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
        <a href="../Views/index_student.php" class="btn btn-primary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
