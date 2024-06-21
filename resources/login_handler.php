<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $sql = "SELECT id, contrasena FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($contrasena, $hashed_password)) {
            // Iniciar sesión
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['correo'] = $correo;
            header("Location: welcome.php");
        } else {
            echo "Contraseña incorrecta. <a href='login.html'>Inténtalo de nuevo</a>";
        }
    } else {
        echo "Correo no registrado. <a href='register.html'>Regístrate</a>";
    }

    $stmt->close();
    $conn->close();
}
?>
