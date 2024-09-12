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
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            <i class="bi bi-building" style="font-size: 19px;"></i> Universidad de Oriente
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index_student.php"> <i class="bi bi-person bi-lg" style="font-size: 19px;"></i> Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index_career.php"> <i class="bi bi-book bi-lg" style="font-size: 19px;"></i> Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Controllers/logout.php"><i class="bi bi-box-arrow-right" style="font-size: 19px;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Estudiantes</h1>
        <a href="./create_student.php" class="btn btn-success mb-3">
            <i class="bi bi-plus"></i> Crear Nuevo Estudiante
        </a>

        <form method="POST" action="./index_student.php">
            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" name="search" placeholder="Buscar por nombre de estudiante o carrera">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Código</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="studentList">
                <?php
                include '../Controllers/index_student_code.php';

                foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['id_student']; ?></td>
                        <td><?php echo $student['name_student']; ?></td>
                        <td><?php echo $student['last_name_student']; ?></td>
                        <td><?php echo $student['code_student']; ?></td>
                        <td><?php echo $student['name_career']; ?></td>
                        <td>
                            <a href="../Controllers/GetByIdStudent.php?action=edit&id=<?php echo $student['id_student']; ?>" class="btn btn-primary btn-sm mr-2">
                                <i class="bi bi-pencil" style="font-size: 25px;"></i>
                            </a>
                            <a href="../Controllers/GetByIdStudent.php?action=delete&id=<?php echo $student['id_student']; ?>" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash" style="font-size: 25px;"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../Controllers/export_students_to_csv.php" class="btn btn-primary"> <i class="bi bi-file-earmark-excel" style="font-size: 19px;"></i> Exportar a Excel</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>