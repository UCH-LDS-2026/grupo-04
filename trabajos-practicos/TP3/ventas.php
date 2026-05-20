<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

include 'conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];


// --- 1. VER HISTORIAL DE VENTAS (Metodo GET) ---
if ($metodo === 'GET') {
    // Consulta usando JOIN para unir las tablas y mostrar los nombres reales
    $sql = "SELECT v.id, c.nombre AS cliente, p.nombre AS producto, dv.cantidad, v.fecha 
            FROM detalle_ventas dv
            JOIN ventas v ON dv.venta_id = v.id
            JOIN clientes c ON v.cliente_id = c.id
            JOIN productos p ON dv.producto_id = p.id
            ORDER BY v.id DESC";
            
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($resultado);
    exit;
}


// --- 2. PROCESAR UNA NUEVA VENTA (Metodo POST) ---
if ($metodo === 'POST') {
    $json = file_get_contents("php://input");
    $datos = json_decode($json, true);
    
    $cliente_id = $datos['cliente_id'];
    $producto_id = $datos['producto_id'];
    $cantidad = intval($datos['cantidad']);
    
    // Paso A: Comprobar si el producto tiene stock suficiente
    $buscarStock = $pdo->prepare("SELECT stock FROM productos WHERE id = ?");
    $buscarStock->execute([$producto_id]);
    $stockActual = $buscarStock->fetchColumn();
    
    if ($stockActual < $cantidad) {
        // Cancelamos la operación si no alcanza la mercadería
        echo json_encode(["error" => "No hay stock suficiente para esta venta"]);
        exit;
    }
    
    // Paso B: Crear el registro de la venta (Cabecera)
    $stmtVenta = $pdo->prepare("INSERT INTO ventas (cliente_id) VALUES (?)");
    $stmtVenta->execute([$cliente_id]);
    $idDeVenta = $pdo->lastInsertId(); // Guardamos el ID de la venta recién creada
    
    // Paso C: Insertar el producto en la tabla relacional (Detalle)
    $stmtDetalle = $pdo->prepare("INSERT INTO detalle_ventas (venta_id, producto_id, cantidad) VALUES (?, ?, ?)");
    $stmtDetalle->execute([$idDeVenta, $producto_id, $cantidad]);
    
    // Paso D: Restar la cantidad vendida al stock del producto
    $actualizarStock = $pdo->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");
    $actualizarStock->execute([$cantidad, $producto_id]);
    
    echo json_encode(["mensaje" => "Venta procesada y stock actualizado"]);
    exit;
}
?>