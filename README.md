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

 - Base de datos: PostgreSQL

## Cómo ejecutar el proyecto

1- Clonar el repositorio: git clone <URL_DEL_REPO>

2- Preparar la Base de Datos: >    * Iniciar el servidor local de MySQL (usando herramientas como XAMPP o WampServer).
Crear una base de datos llamada mendoza_stock (o el nombre que usen) e importar el archivo del esquema de base de datos
(schema.sql).

4- Configurar la conexión: Asegurarse de que el archivo de conexión de PHP tenga las credenciales correctas de su MySQL local (Host, Usuario y Contraseña).

5- Ejecutar el Backend: >    * Colocar la carpeta del proyecto dentro del directorio del servidor web (por ejemplo, htdocs en XAMPP) o iniciar el servidor de desarrollo integrado de PHP ejecutando en la terminal: php -S localhost:8000 dentro de la carpeta del backend.

Probar el sistema (API REST): Dado que el Frontend (interfaz gráfica) aún está en desarrollo, las funcionalidades y la lógica de negocio (descuento de stock, creación de ventas) se deben testear enviando peticiones JSON mediante Postman a los endpoints del backend.


