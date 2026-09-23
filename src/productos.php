<?php
header("Content-Type: application/json");
require_once "funciones.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // Si la URL es /src/productos.php?alertas=1 muestra solo stock crítico
    if (isset($_GET['alertas'])) {
        echo json_encode(obtenerStockCritico());
    } else {
        echo json_encode(obtenerProductos());
    }
} elseif ($method === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['nombre'], $data['precio'], $data['stock'])) {
        crearProducto($data['nombre'], $data['precio'], $data['stock']);
        echo json_encode(["mensaje" => "Producto agregado correctamente"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Datos incompletos"]);
    }
} elseif ($method === 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['id'], $data['stock'])) {
        actualizarStock($data['id'], $data['stock']);
        echo json_encode(["mensaje" => "Stock actualizado correctamente"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Datos incompletos para actualizar stock"]);
    }
}