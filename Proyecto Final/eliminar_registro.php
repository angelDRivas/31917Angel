<?php

function eliminarRegistro($conn, $usuario_id) {
    $sql_eliminar_usuario = "DELETE FROM usuarios WHERE id = $usuario_id";
    return $conn->query($sql_eliminar_usuario);
}

function resetearID($conn) {
    $sql_reset_id = "ALTER TABLE usuarios AUTO_INCREMENT = 1";
    return $conn->query($sql_reset_id);
}

?>
