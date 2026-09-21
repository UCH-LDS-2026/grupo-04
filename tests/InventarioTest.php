<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Inventario.php';

class InventarioTest extends TestCase {
    private $pdo;
    private $inventario;

    protected function setUp(): void {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec("CREATE TABLE productos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre TEXT NOT NULL,
            precio DECIMAL(10,2) NOT NULL,
            stock INTEGER NOT NULL
        )");

        $this->inventario = new Inventario($this->pdo);
    }

    public function testCrearYObtenerProducto() {
        $this->inventario->crearProducto("Mouse Test", 5000.00, 10);
        $productos = $this->inventario->obtenerProductos();

        $this->assertCount(1, $productos);
        $this->assertEquals("Mouse Test", $productos[0]['nombre']);
    }

    public function testObtenerStockCritico() {
        $this->inventario->crearProducto("Producto OK", 1000.00, 20);
        $this->inventario->crearProducto("Producto Critico", 2000.00, 2);

        $criticos = $this->inventario->obtenerStockCritico(5);

        $this->assertCount(1, $criticos);
        $this->assertEquals("Producto Critico", $criticos[0]['nombre']);
    }
}
