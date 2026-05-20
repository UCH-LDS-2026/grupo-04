<?php
// Permisos obligatorios para que React pueda leer la API desde afuera
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

include 'conexion.php';

// Detectamos qué tipo de petición está haciendo el Frontend
$metodo = $_SERVER['REQUEST_METHOD'];


// --- 1. LEER CLIENTES (Metodo GET) ---
if ($metodo === 'GET') {
    $consulta = $pdo->query("SELECT * FROM clientes ORDER BY id DESC");
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    // Convertimos el array de PHP a formato de texto JSON
    echo json_encode($resultado);
    exit;
}


// --- 2. GUARDAR CLIENTE (Metodo POST) ---
if ($metodo === 'POST') {
    // Leemos el JSON oculto que nos manda el frontend
    $json = file_get_contents("php://input");
    $datos = json_decode($json, true);
    
    $nombre = $datos['nombre'];
    $email = $datos['email'];
    
    if (!empty($nombre) && !empty($email)) {
        $sql = "INSERT INTO clientes (nombre, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $email]);
        
        // Respondemos con un mensajito de éxito
        echo json_encode(["mensaje" => "Cliente registrado correctamente"]);
    } else {
        echo json_encode(["error" => "Faltan datos obligatorios"]);
    }
    exit;
}
?>