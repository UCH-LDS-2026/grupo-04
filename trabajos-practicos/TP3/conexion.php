<?php
// Configuración básica del servidor local
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mendoza_stock";

try {
    // Conectamos a MySQL con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
?>