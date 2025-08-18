<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root";
$db = "futebol_db"; // Erro: db ao invés de crud_futebol

$conn = mysqli_connect ($host, $user, $password, $db); // Erro: $hot ao invés de $host

if (!$conn) {
    echo "Falha na conexão!";
}
?>