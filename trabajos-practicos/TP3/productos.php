<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

include 'conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];


// --- 1. LISTAR PRODUCTOS (Metodo GET) ---
if ($metodo === 'GET') {
    $consulta = $pdo->query("SELECT * FROM productos ORDER BY id DESC");
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($resultado);
    exit;
}


// --- 2. CARGAR PRODUCTO (Metodo POST) ---
if ($metodo === 'POST') {
    $json = file_get_contents("php://input");
    $datos = json_decode($json, true);
    
    $nombre = $datos['nombre'];
    $precio = $datos['precio'];
    $stock = $datos['stock'];
    
    if (!empty($nombre) && isset($precio) && isset($stock)) {
        $sql = "INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $precio, $stock]);
        
        echo json_encode(["mensaje" => "Producto guardado con éxito"]);
    } else {
        echo json_encode(["error" => "Campos incompletos"]);
    }
    exit;
}
?>