#### Universidad Champagnat - Laboratorio de Desarrollo de Software - 2026

# Proyecto Final
## Grupo N° 4

## Integrantes:
- Nombre Thomas Rodríguez
- Nombre Brian Exequiel Villalba Gutiérrez 
- Nombre Juan Ignacio González

## Problema que resuelve
  - La solución propuesta permite digitalizar y centralizar el control de inventario en pequeños comercios, eliminando registros manuales en papel. El sistema agiliza la actualización de existencias y el proceso de venta, evitando pérdidas de capital por falta de stock y mejorando la rapidez en la atención al cliente.

## Usuarios

 - Administrador (Dueño del comercio): Gestiona el catálogo, controla costos, configura alertas de stock y visualiza métricas de rendimiento.

 - Operador (Cajero/Repositor): Realiza búsquedas de productos, registra ventas en tiempo real y actualiza la entrada de mercadería.

## Funcionalidades principales

-  Gestión de catálogo: Registro y categorización de productos con precios y descripciones.
-   Control de stock en tiempo real: Actualización automática de unidades tras cada venta o ingreso.
-  Punto de Venta : Interfaz para procesar transacciones y registrar pagos rápidamente.
-  Alertas de stock crítico: Notificaciones automáticas cuando un producto alcanza su nivel mínimo de reposición.
-  Emisión de recibos digitales: Generación de comprobantes de venta para ser compartidos de forma inmediata.

## Stack tecnológico

 - Frontend: Html y CSS

 - Backend: PHP

 - Base de datos: MySQL

**Paso 1: Clonar el repositorio**
git clone <URL_DEL_REPO>
Paso 2: Preparar la Base de Datos (MySQL)

 1 Instalar y abrir un entorno de servidor local como XAMPP, WampServer o Laragon.

 2 Iniciar los servicios de MySQL y Apache.

 3 Abrir phpMyAdmin (o tu gestor de base de datos preferido) y crear una base de datos nueva llamada mendoza_stock.

 4  Importar el archivo schema.sql (que se encuentra en el repositorio) para crear las tablas y las relaciones automáticamente.

Paso 3: Configurar la conexión del Backend

 1 Abrir el archivo de conexión PDO en PHP (por ejemplo, conexion.php).

 2 Verificar que las credenciales coincidan con tu servidor local:

Host: localhost

DB Name: mendoza_stock

User: root

Password:   (vacio en xammp por defecto)

Paso 4: Ejecutar el Servidor

Opción A (XAMPP/WAMP): Mueve la carpeta del proyecto dentro del directorio htdocs (en XAMPP) o www (en WAMP). Luego, accede desde tu navegador a http://localhost/tu_carpeta_del_proyecto.

Opción B (Terminal): Abre la terminal dentro de la carpeta del backend y ejecuta el servidor de desarrollo integrado de PHP con el siguiente comando:

php -S localhost:8000
Paso 5: Testear la API REST
Como la interfaz gráfica (Frontend) aún está en desarrollo, la lógica de negocio debe probarse utilizando Postman.

Envía peticiones en formato JSON (GET, POST) a los endpoints correspondientes (por ejemplo: http://localhost:8000/ventas.php) para verificar la creación de ventas y el descuento automático de stock.
---

## TP 4 y TP 5 - Calidad, Testing y Refactor POO
El proyecto cuenta con una suite de pruebas automatizadas utilizando el framework PHPUnit para garantizar la integridad y el correcto comportamiento de la lógica de negocio core del sistema. 

Para el TP5, toda la lógica de control de inventario fue refactorizada a Programación Orientada a Objetos (POO) dentro de la clase `src/Inventario.php`.

### Cómo ejecutar los tests
Para correr la suite de pruebas automatizadas en un entorno local con XAMPP, ejecuta el siguiente comando en la terminal desde la raíz del proyecto:
```bash
J:\xampp\php\php.exe mendoza-stock\tests\phpunit-10.5.63.phar mendoza-stock\tests (PC DE ESCRITORIO)
C:\xampp\php\php.exe mendoza-stock\tests\phpunit-10.5.63.phar mendoza-stock\tests (NOTEBOOK)
