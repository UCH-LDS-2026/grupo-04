<?php
// tests/ApiLógicaTest.php

use PHPUnit\Framework\TestCase;

// Importamos las funciones apuntando correctamente a la carpeta src
require_once __DIR__ . '/../src/funciones.php';

class ApiLógicaTest extends TestCase {

    // TEST 1: Validación de campos obligatorios
    public function testValidacionClienteFallaSiFaltaEmail() {
        $resultado = validarDatosCliente("Nicolas Fenoy", "");
        $this->assertFalse($resultado, "La API debería rechazar al cliente si no tiene email.");
    }

    // TEST 2: Control de Stock Exitoso
    public function testRestarStockCorrectamente() {
        $stockFinal = calcularNuevoStock(10, 3);
        $this->assertEquals(7, $stockFinal, "Si hay 10 y se venden 3, el stock debe quedar en 7.");
    }

    // TEST 3: Bloqueo de Venta por Falta de Stock
    public function testBloquearVentaSiNoHayStockSuficiente() {
        $resultado = calcularNuevoStock(5, 12);
        $this->assertFalse($resultado, "La API debe denegar la venta si se pide más de lo que hay.");
    }
}