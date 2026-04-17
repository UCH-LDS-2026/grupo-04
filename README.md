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

 - Frontend: React Native

 - Backend: Node.js con Express

 - Base de datos: PostgreSQL

## Cómo ejecutar el proyecto

 - Clonar el repositorio:
Ejecutar el comando git clone [URL_DEL_REPOSITORIO] en la terminal para obtener una copia local del código.

 - Instalación de dependencias:
Acceder a las carpetas de frontend y backend de forma independiente y ejecutar npm install para descargar las librerías necesarias.

 - Configuración del entorno:
Crear un archivo .env en la raíz del backend basado en el ejemplo proporcionado (.env.example) y completar las credenciales de conexión a la base de datos PostgreSQL.

 - Preparación de la Base de Datos:
Asegurarse de que el servicio de PostgreSQL esté activo y ejecutar el comando npm run migrate (o el equivalente según el ORM utilizado) para crear las tablas del sistema de stock.

 - Lanzamiento del Backend:
Dentro de la carpeta del servidor, iniciar el servicio mediante el comando npm run dev para habilitar la API.

 - Lanzamiento del Frontend:
Desde la carpeta del cliente móvil, ejecutar npx react-native run-android o npx react-native run-ios para desplegar la aplicación en un emulador o dispositivo físico.
