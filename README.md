# 📦 Mendoza Stock - Sistema de Gestión de Inventario

#### Universidad Champagnat - Laboratorio de Desarrollo de Software

**Grupo N° 4**

- Thomas Rodríguez
- Brian Exequiel Villalba Gutiérrez
- Juan Ignacio González

---

## Descripción del Proyecto

La solución propuesta permite digitalizar y centralizar el control de inventario en pequeños comercios, eliminando registros manuales en papel. El sistema agiliza la actualización de existencias, notifica sobre bajo stock y gestiona el catálogo en tiempo real.

---

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado en tu computadora:

1. **PHP 8.x** (o mediante un servidor local como **XAMPP** o **WAMP**).
2. **MySQL / MariaDB** (incluido en XAMPP/WAMP).
3. **Git** (para clonar el repositorio).
4. **Navegador Web** (Chrome, Firefox, Edge).

---

## Guía de Instalación Paso a Paso (Desde Cero)

### 1. Clonar el Repositorio

Abre tu terminal o consola de comandos y ejecuta:


git clone [https://github.com/UCH-LDS-2026/grupo-04.git](https://github.com/UCH-LDS-2026/grupo-04.git)
cd grupo-04
### 2. Configurar la Base de Datos
Inicia los servicios de Apache y MySQL desde el panel de XAMPP.

Abre tu navegador y entra a phpMyAdmin: http://localhost/phpmyadmin

Crea una nueva base de datos llamada estrictamente: mendoza_stock

Selecciona la base de datos mendoza_stock, ve a la pestaña Importar y selecciona el archivo mendoza_stock.sql ubicado en la raíz del proyecto.

Haz clic en Importar para cargar las tablas e información inicial.

### 3. Verificar Conexión
Revisa el archivo conexion.php en la raíz del proyecto. Por defecto viene configurado para entornos locales estándar:

Host: localhost

Base de datos: mendoza_stock

Usuario: root

Contraseña: "" (vacío)

Si tu MySQL local tiene contraseña, modifícala en ese archivo.

### 4. Iniciar la Aplicación

Abre la terminal en la carpeta raíz del proyecto y ejecuta el servidor local de PHP.

> **IMPORTANTE - Ruta de ejecución según tu entorno:**
> La ruta del ejecutable `php.exe` dependerá de la **unidad de almacenamiento** (`C:`, `D:`, etc.) y la carpeta donde tengas instalado XAMPP en tu equipo.

* **Si tienes PHP agregado a las Variables de Entorno (PATH):**
  
  php -S localhost:8000
Si ejecutas desde XAMPP en Windows (Ajustar según tu disco/unidad):




# Si XAMPP está en el Disco C:
C:\xampp\php\php.exe -S localhost:8000

# Si XAMPP está en otra unidad o carpeta (ejemplo Disco D:):
D:\xampp\php\php.exe -S localhost:8000
Una vez iniciado el servidor, abre tu navegador e ingresa a: http://localhost:8000


---

Con esa aclaración en el `README.md`, guardás los cambios (`Ctrl + S`) y hacés el push final en la terminal:


git add .
git commit -m "Docs: Aclarar rutas de ejecucion de PHP segun unidad de disco"
git push origin main

 Diagramas de Arquitectura (UML)
# 1. Diagrama de Casos de Uso

![image alt](https://github.com/UCH-LDS-2026/grupo-04/blob/e7f9fbb1d399723c05aa08a49262db86ac35278f/docs/casos_poo.png)

# 2. Diagrama de Clases (POO)

![image alt]([https://github.com/UCH-LDS-2026/grupo-04/blob/e7f9fbb1d399723c05aa08a49262db86ac35278f/docs/casos_uso.png](https://github.com/UCH-LDS-2026/grupo-04/blob/1faf52109461cd3d1edeb0fdfbe8f41ac943061b/docs/clase.png))


### Pruebas Unitarias (Testing)

El sistema cuenta con la lógica de negocio encapsulada bajo Programación Orientada a Objetos en `src/Inventario.php` y pruebas automatizadas escritas en PHPUnit.

Para ejecutar las pruebas en tu máquina, abre la terminal en la raíz del proyecto y corre:

**Si tienes PHP en el PATH de tu sistema:**
php tests/phpunit-10.5.63.phar tests/InventarioTest.php

**Si ejecutas usando el ejecutable directo de XAMPP (Ajustar según tu unidad/carpeta):**
# Instalación estándar en Disco C:
C:\xampp\php\php.exe tests/phpunit-10.5.63.phar tests/InventarioTest.php

# Si XAMPP está en otra unidad (ej. Disco D):
D:\xampp\php\php.exe tests/phpunit-10.5.63.phar tests/InventarioTest.php


 ## Stack Tecnológico
Frontend: HTML5, CSS3 (Bootstrap 5) y JavaScript Asincrónico (Fetch API).

Backend: PHP 8 (Programación Orientada a Objetos y API REST).

Base de Datos: MySQL / MariaDB (vía PDO).

Testing: PHPUnit 10.


---


Una vez reemplazado y guardado el archivo (`Ctrl + S`), ejecutá esto para subir todo limpio:

```powershell
git add .
git commit -m "Descripcion del Cambio"
git push origin main

