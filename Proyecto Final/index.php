<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ProyectoFinal</title>
    <link rel="shortcut icon" href="img/icono.jpeg">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <h1>REGISTRO DE USUARIOS</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>

        <input type="submit" name="registrar" value="Registrar">

        
        
    </form>
    <button class = "custom-button"onclick="window.location.href='http://angel319172081.free.nf/Proyecto%20Final/ver_registros.php'">ver registros</button>
   
    <?php
    include 'conexion.php';
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        $sql_insert_usuario = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
        if ($conn->query($sql_insert_usuario) === TRUE) {
            $usuario_id = $conn->insert_id;
            echo '<p class="mensaje">Usuario registrado correctamente</p>';
        } else {
            echo '<p class="error">Error al registrar usuario: ' . $conn->error . '</p>';
        }
    }


    $conn->close();
    ?>

    
        


</body>
</html>
