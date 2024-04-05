<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM users WHERE mail='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION["USER"] = $username;
        header("Location: ../Intro/index.php"); // Redireccionar a la página de bienvenida
        exit();
    } else {
        $error_message = "Nombre de usuario o contraseña incorrectos.";
    }
}

if (!isset($error_message)) {
    $error_message = '';
}

?>