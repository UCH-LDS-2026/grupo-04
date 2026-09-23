<?php
require_once __DIR__ . '/../conexion.php';

// Garantizar compatibilidad con el nombre de la variable de conexión
if (!isset($pdo) && isset($conexion)) {
    $pdo = $conexion;
}

// 1. Obtención del catálogo completo de productos
function obtenerProductos() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM productos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 2. Filtrado de productos con stock crítico (<= 5 unidades)
function obtenerStockCritico($limite = 5) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE stock <= ?");
    $stmt->execute([$limite]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 3. Creación de un nuevo producto
function crearProducto($nombre, $precio, $stock) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");
    return $stmt->execute([$nombre, $precio, $stock]);
}

// 4. Actualización de stock con límite de rango (0 a 100.000)
function actualizarStock($id, $stock) {
    global $pdo;
    
    $stock = intval($stock);
    if ($stock > 100000) {
        $stock = 100000;
    }
    if ($stock < 0) {
        $stock = 0;
    }

    $stmt = $pdo->prepare("UPDATE productos SET stock = ? WHERE id = ?");
    return $stmt->execute([$stock, $id]);
}