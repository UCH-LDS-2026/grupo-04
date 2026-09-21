#### Universidad Champagnat - Laboratorio de Desarrollo de Software - 2026

# Proyecto Final
## Grupo N° 4

## Integrantes:
- Thomas Rodríguez
- Brian Exequiel Villalba Gutiérrez 
- Juan Ignacio González

## Problema que resuelve
La solución propuesta permite digitalizar y centralizar el control de inventario en pequeños comercios, eliminando registros manuales en papel. El sistema agiliza la actualización de existencias y el proceso de venta, evitando pérdidas de capital por falta de stock y mejorando la rapidez en la atención al cliente.

## Usuarios
- **Administrador (Dueño del comercio):** Gestiona el catálogo, controla costos, configura alertas de stock y visualiza métricas de rendimiento.
- **Operador (Cajero/Repositor):** Realiza búsquedas de productos, registra ventas en tiempo real y actualiza la entrada de mercadería.

## Funcionalidades principales
- **Interfaz Web Interactiva:** Panel visual dinámico para gestión de catálogo y alertas sin recargar la página.
- **Gestión de catálogo:** Registro de productos con precios y existencias en tiempo real.
- **Punto de Venta (API REST):** Endpoints REST para procesar transacciones y consultar productos.
- **Alertas de stock crítico:** Notificaciones automáticas cuando un producto alcanza un nivel mínimo (5 unidades por defecto).

## Stack tecnológico
- **Frontend:** HTML5, CSS3 (Bootstrap 5) y JavaScript Asincrónico (`fetch` API).
- **Backend:** PHP (8.x) estructurado en Programación Orientada a Objetos (POO) y arquitectura REST.
- **Base de Datos:** MySQL / MariaDB mediante PDO (PHP Data Objects).
- **Testing:** PHPUnit (Pruebas unitarias automatizadas).

---

## Guía de Instalación y Ejecución Local

### Paso 1: Preparar la Base de Datos
1. Iniciar **MySQL** en el servidor local (XAMPP/WAMP).
2. Abrir phpMyAdmin y crear la base de datos `mendoza_stock`.
3. Importar el archivo **`mendoza_stock.sql`** ubicado en la raíz del proyecto.

### Paso 2: Configurar Conexión
Verificar en `conexion.php` las credenciales por defecto:
- Host: `localhost`
- Database: `mendoza_stock`
- User: `root`
- Password: `` (vacío)

### Paso 3: Ejecutar el Servidor
Iniciar el servidor integrado de PHP desde la raíz del proyecto:
```bash
php -S localhost:8000
Paso 4: Acceso a la Aplicación y API
Interfaz Visual (Frontend): Acceder a http://localhost:8000 en el navegador.

Obtener productos (API REST): GET http://localhost:8000/src/productos.php

Alertas de stock crítico (API REST): GET http://localhost:8000/src/productos.php?alertas=1

Registrar o consultar ventas: GET / POST http://localhost:8000/src/ventas.php

TP4 y TP5 - Testing y Refactor POO
La lógica de negocio principal del inventario está encapsulada mediante Programación Orientada a Objetos en la clase src/Inventario.php.

Ejecutar Tests Unitarios
Para correr las pruebas unitarias automatizadas con PHPUnit:

Bash


php tests/phpunit-10.5.63.phar tests/InventarioTest.php

Una vez reemplazado el texto en tu `README.md`, acordate de subir el cambio a GitHub con:

```powershell
git add README.md
git commit -m "Docs: Actualizar README con stack tecnológico completo (Frontend y Backend)"
git push origin main
