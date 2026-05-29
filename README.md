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

2- Instalar dependencias: Ejecutar npm install en las carpetas de frontend y backend.

3- Configurar variables de entorno: Crear archivo .env en el backend con las credenciales de PostgreSQL.

4- Preparar base de datos: Ejecutar las migraciones (npm run migrate) para crear las tablas necesarias.

5- Ejecutar el proyecto: Iniciar el backend con npm run dev y el frontend con npx react-native run-android o ios.



