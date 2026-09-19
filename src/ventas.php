<?php
header("Content-Type: application/json");
require_once "funciones.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['cliente_id']) && isset($data['items'])) {
        $resultado = registrarVenta($data['cliente_id'], $data['items']);
        if ($resultado['status']) {
            echo json_encode($resultado);
        } else {
            http_response_code(500);
            echo json_encode($resultado);
        }
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Se requiere cliente_id e items"]);
    }
}
?>