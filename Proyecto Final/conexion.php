<?php
$servername = "sql313.infinityfree.com";  
$username = "if0_35204099";    
$password = "p0EVMmtGS15"; 
$dbname = "if0_35204099_persona"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
