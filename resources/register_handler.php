<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];

    // Verificar si el correo ya está registrado
    $check_sql = "SELECT id FROM usuarios WHERE correo = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $correo);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "Este correo ya está registrado. <a href='register.html'>Intenta con otro correo</a>";
        $check_stmt->close();
        $conn->close();
        exit();
    }
    $check_stmt->close();

    // Insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena, domicilio, telefono) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("sssss", $nombre, $correo, $contrasena, $domicilio, $telefono);

    if ($stmt->execute()) {
        echo "<div style='text-align: center; margin-top: 50px;'>
                <p>Registro exitoso.</p>
                <a href='login.html' style='display: inline-block; padding: 10px 20px; background-color: #ff5733; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s;'>Inicia sesión</a>
              </div>";
    } else {
        echo "Error al registrar el usuario: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
