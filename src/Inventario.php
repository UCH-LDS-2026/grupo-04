<?php
require_once __DIR__ . '/../conexion.php';

class Inventario {
    private $pdo;

    public function __construct($pdo = null) {
        if ($pdo) {
            $this->pdo = $pdo;
        } else {
            global $conexion;
            $this->pdo = $conexion;
        }
    }

    public function obtenerProductos() {
        $stmt = $this->pdo->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerStockCritico($minimo = 5) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE stock <= ?");
        $stmt->execute([$minimo]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crearProducto($nombre, $precio, $stock) {
        $stmt = $this->pdo->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $precio, $stock]);
    }

    public function registrarVenta($cliente_id, $productos) {
        try {
            $this->pdo->beginTransaction();

            $stmt = $this->pdo->prepare("INSERT INTO ventas (cliente_id) VALUES (?)");
            $stmt->execute([$cliente_id]);
            $venta_id = $this->pdo->lastInsertId();

            foreach ($productos as $p) {
                $stmtDetalle = $this->pdo->prepare("INSERT INTO detalle_ventas (venta_id, producto_id, cantidad) VALUES (?, ?, ?)");
                $stmtDetalle->execute([$venta_id, $p['producto_id'], $p['cantidad']]);

                $stmtStock = $this->pdo->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");
                $stmtStock->execute([$p['cantidad'], $p['producto_id']]);
            }

            $this->pdo->commit();
            return ["status" => "exito", "venta_id" => $venta_id];
        } catch (Exception $e) {
            $this->pdo->rollBack();
            return ["status" => "error", "mensaje" => $e->getMessage()];
        }
    }
}
