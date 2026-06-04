<?php
// src/funciones.php

/**
 * TEST 1: Valida que los campos obligatorios del cliente no viajen vacíos
 */
function validarDatosCliente(string $nombre, string $email) {
    if (!empty($nombre) && !empty($email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * TEST 2 y 3: Calcula el stock restante y bloquea si falta stock
 */
function calcularNuevoStock(int $stockActual, int $cantidadVendida) {
    if ($cantidadVendida > $stockActual) {
        return false; 
    }
    return $stockActual - $cantidadVendida; 
}