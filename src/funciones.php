<?php
require_once __DIR__ . '/../conexion.php';

// --- GESTIÓN DE PRODUCTOS Y STOCK ---
function obtenerProductos() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM productos");
    return $stmt->fetchAll();
}

function obtenerStockCritico($limite = 5) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE stock <= ?");
    $stmt->execute([$limite]);
    return $stmt->fetchAll();
}

function crearProducto($nombre, $precio, $stock) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");
    return $stmt->execute([$nombre, $precio, $stock]);
}

// --- GESTIÓN DE CLIENTES ---
function obtenerClientes() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM clientes");
    return $stmt->fetchAll();
}

// --- PUNTO DE VENTA Y EMISIÓN DE RECIBOS ---
function registrarVenta($cliente_id, $items) {
    global $pdo;
    try {
        $pdo->beginTransaction();

        // 1. Insertar Venta
        $stmtVenta = $pdo->prepare("INSERT INTO ventas (cliente_id) VALUES (?)");
        $stmtVenta->execute([$cliente_id]);
        $venta_id = $pdo->lastInsertId();

        // 2. Insertar Detalle y Descontar Stock en tiempo real
        $stmtDetalle = $pdo->prepare("INSERT INTO detalle_ventas (venta_id, producto_id, cantidad) VALUES (?, ?, ?)");
        $stmtStock = $pdo->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");

        foreach ($items as $item) {
            $stmtDetalle->execute([$venta_id, $item['producto_id'], $item['cantidad']]);
            $stmtStock->execute([$item['cantidad'], $item['producto_id']]);
        }

        $pdo->commit();

        return [
            "status" => true,
            "venta_id" => $venta_id,
            "mensaje" => "Venta registrada con éxito y stock actualizado."
        ];
    } catch (Exception $e) {
        $pdo->rollBack();
        return ["status" => false, "error" => $e->getMessage()];
    }
}
