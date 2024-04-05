<?php

require("../functions/conexion.php");
require("../functions/validation.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
<title>Formulario de Inicio de Sesión</title>
<style>
    
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    body{
        background:url(../img/benner_bg.avif) no-repeat;
        background-size:cover;
    }
    h2 {
        color: #9b0a0a;
    }
    .login-background {
        font-family: Arial, sans-serif;
        background-color: rgba(0,0,0,0.6);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
    }

    .login-container h2 {
        margin-top: 0;
        text-align: center;
    }

    .login-container form {
        display: flex;
        flex-direction: column;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .login-container input[type="submit"] {
        background-color: #9b0a0a;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
        background-color: #7b0505;
    }
    .pass_error {
        color: red;
    }
    .logup {
        margin-bottom: 10px;
    }
    .logup_link {
        color: #9b0a0a;
    }
</style>
</head>
<body>
    <div class="login-background">
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form action="#" method="post">
                <input type="text" name="username" placeholder="Nombre de Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <span class="pass_error"><?php echo $error_message; ?></span>
                <span class="logup">¿Aun no tienes cuenta? <a class="logup_link" href="">Registrate</a></span>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
</body>
</html>
