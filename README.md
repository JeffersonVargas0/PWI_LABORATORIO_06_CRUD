# Sistema de Noticias Tacna21 (PHP Clásico + MariaDB)

Este proyecto es un laboratorio académico de un sistema CRUD completo desarrollado en PHP nativo y MariaDB, utilizando un enfoque clásico de renderizado en el servidor mediante plantillas con `include`.

## 🚀 Instalación y Despliegue Rápido

1. Clonar este repositorio en la carpeta pública de tu servidor local (ej. `htdocs` en XAMPP o `www` en Laragon).
2. Asegúrate de tener iniciados los servicios de Apache y MySQL/MariaDB.
3. **Paso crucial para la base de datos:** Abre tu navegador y dirígete a:
   `http://localhost/tacna21/migraciones/run.php`
   *(Esto creará la base de datos `tacna21` y la tabla `noticias` automáticamente, sin necesidad de usar phpMyAdmin).*
4. Accede al sistema desde `http://localhost/tacna21/index.php`.

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP 8.x (Estructura procedural clásica)
* **Base de Datos:** MySQL / MariaDB (Driver `mysqli`)
* **Frontend:** HTML5, CSS3 

## 📂 Estructura Principal

* `/css` e `/img`: Recursos estáticos y hojas de estilo.
* `/migraciones`: Scripts de automatización de base de datos.
* `conexion.php`: Lógica de conexión al motor de base de datos.
* `form_*.php`: Vistas de los formularios.
* Archivos raíz (`agregar.php`, `eliminar.php`, etc.): Controladores lógicos que procesan las peticiones.