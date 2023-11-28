<?php
$usuario = $_POST['nombre_usuario']
$password = $_POST['contraseña']

$q = "SELECT COUNT(*) AS comtar FROM usuarios WHERE nombre_usuario = '$usuario'AND contraseña = $password"
echo 
?>