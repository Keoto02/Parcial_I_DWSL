<?php
    include '../../conf/conf.php';
    
    $search = "";
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    $query = "SELECT * FROM Careers 
    WHERE name_career LIKE '%$search%'";

    try {
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $careers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error al ejecutar la consulta: " . $e->getMessage();
    }
?>
