<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleLogin.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="index.php" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required name="user">
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="pwd">
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for="">
                            <a href="#">Olvidé mi contraseña</a>
                        </label>
                    </div>
                    <button type="submit">Acceder</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
    include_once "./conf/conf.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = isset($_POST['user']) ? $_POST['user'] : "";
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";

        $query = "SELECT userOwner, userName, userPwd FROM Users WHERE userName = :user AND userPwd = :pwd";
        $stmt = $connection->prepare($query);
    
        $stmt->execute([
            ':user' => $user,
            ':pwd' => md5($pwd)
        ]);
    
        if ($stmt->rowCount() == 1) {
            session_start();
            $theUser = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["user"] = $theUser['userOwner'];
            header('Location: ./admin/Views/index_student.php');
        } else {
            $error = "Error en el inicio de sesión";
        }
    }
?>