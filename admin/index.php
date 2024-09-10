<?php
session_start();
if ($_SESSION['user'] == "") {
    header("Location: ./index.php");
}
include_once("../conf/conf.php");

$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
</head>

<body>
    <h1>Listo</h1>
</body>

</html>