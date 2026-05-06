# Sitio de Noticias Tacna21

Sistema web de gestión y publicación de noticias desarrollado para la región de Tacna.

## Requisitos del Sistema

### Software Requerido

- **XAMPP** 7.2 o superior (incluye Apache, PHP y MySQL)
- **PHP** 7.2 o superior
- **MySQL** 5.6 o superior
- **Navegador web** moderno (Chrome, Firefox, Safari, Edge)

### Extensiones PHP Necesarias

- `mysqli` (MySQL Improved)
- `gd` (para manejo de imágenes)
- `curl`

## Instalación

### 1. Descargar XAMPP

- Descargar desde [https://www.apachefriends.org/](https://www.apachefriends.org/)
- Instalar en el equipo local

### 2. Clonar o Copiar el Proyecto

```bash
# Copiar la carpeta del proyecto a la ruta de XAMPP
cp -r tacna21 C:/xampp/htdocs/
```

O manualmente copiar la carpeta `tacna21` a `C:\xampp\htdocs\`

### 3. Iniciar XAMPP

- Abrir XAMPP Control Panel
- Iniciar los servicios:
  - **Apache** (Puerto 80)
  - **MySQL** (Puerto 3306)

### 4. Crear la Base de Datos

#### Opción A: Usando phpMyAdmin

1. Abrir navegador y dirigirse a `http://localhost/phpmyadmin`
2. Crear nueva base de datos llamada `tacna21`
3. Importar el archivo de estructura (si existe: `database.sql`)

#### Opción B: Usando línea de comandos

```bash
mysql -u root -p < database.sql
```

### 5. Configurar la Conexión

El archivo `conexion.php` contiene los parámetros de conexión:

```php
mysqli_connect("localhost", "root", "", "tacna21")
```

- **Host**: localhost
- **Usuario**: root
- **Contraseña**: (vacío por defecto)
- **Base de datos**: tacna21

## Estructura del Proyecto

```
tacna21/
├── index.php              # Página principal
├── conexion.php           # Configuración de base de datos
├── encabezado.php         # Header y navegación
├── lateral.php            # Barra lateral
├── contenido.php          # Contenido principal
├── piepag.php             # Footer
├── listar_noticias.php    # Listado de noticias
├── css/                   # Estilos CSS
│   ├── estilos.css
│   ├── contenido.css
│   ├── estiloshead.css
│   ├── estilospie.css
│   └── lateral.css
├── img/                   # Imágenes
│   └── banner-tacna.jpg
└── README.md              # Este archivo
```

## Funcionalidades

- ✅ Listar noticias
- ✅ Ver noticias por categoría
- ✅ Búsqueda de noticias
- ✅ Contacto
- ✅ Insertar noticias
- ✅ Editar noticias
- ✅ Eliminar noticias

## Acceso a la Aplicación

Una vez completada la instalación, acceder a:

```
http://localhost/tacna21/
```

## Tabla de Base de Datos

### Tabla: noticias

```sql
CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    articulo LONGTEXT NOT NULL,
    autor VARCHAR(100),
    categoria VARCHAR(100),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Navegación Principal

- **Inicio** - Página principal
- **Insertar Noticias** - Agregar nueva noticia
- **Editar Noticias** - Modificar noticia existente
- **Eliminar Noticias** - Borrar noticia
- **Listar Noticias** - Ver todas las noticias
- **Buscar** - Buscar noticias
- **Consultas** - Consultas avanzadas
- **Contacto** - Formulario de contacto

## Solución de Problemas

### Error: "Error conectando a la base de datos"

- Verificar que MySQL esté iniciado en XAMPP
- Verificar credenciales en `conexion.php`
- Verificar que la base de datos `tacna21` existe

### Error: "Fallo en la Consulta"

- Revisar que la tabla `noticias` esté creada
- Verificar estructura de la tabla
- Revisar los permisos de usuario MySQL

### Páginas no cargan

- Verificar que Apache esté corriendo
- Verificar rutas relativas en el proyecto
- Limpiar caché del navegador

## Versión

- **Versión**: 1.0
- **Última actualización**: Mayo 2024
- **Autor**: Programación Web I 2024-II

## Licencia

Este proyecto es parte del curso de Programación Web I.

## Soporte

Para más información o soporte, contactar a través del formulario de contacto en la aplicación.
