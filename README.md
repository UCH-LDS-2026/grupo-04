#### Universidad Champagnat - Laboratorio de Desarrollo de Software - 2026

# Proyecto Final
## Grupo N° 4

## Integrantes:
- Nombre Thomas Rodríguez
- Nombre Brian Exequiel Villalba Gutiérrez 
- Nombre Juan Ignacio González

## Problema que resuelve
  - Muchos pequeños comercios en Mendoza aún dependen de registros manuales o la memoria para gestionar su mercadería. Esto provoca pérdidas de capital por falta de stock real, desorden administrativo y una atención al cliente lenta. MendozaStock digitaliza estos procesos para asegurar el control total del inventario y agilizar las ventas.

## Usuarios

 - Administrador (Dueño del comercio): Gestiona el catálogo, controla costos, configura alertas de stock y visualiza métricas de rendimiento.

 - Operador (Cajero/Repositor): Realiza búsquedas de productos, registra ventas en tiempo real y actualiza la entrada de mercadería.

## Funcionalidades principales

 - Catálogo Dinámico y Categorizado: Registro de artículos con imágenes, precios y categorías para una localización instantánea.

 - Monitor de Existencias en Tiempo Real: Actualización automática del inventario tras cada venta, garantizando datos precisos siempre.

 - Punto de Venta Móvil : Interfaz para procesar transacciones rápidamente y emitir comprobantes de pago digitales.

## Stack tecnológico

Frontend: React Native

Backend: Node.js con Express

Base de datos: PostgreSQL

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
