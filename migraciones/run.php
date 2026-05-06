<?php
// Nos conectamos a MySQL sin especificar base de datos primero
$link = mysqli_connect("localhost", "root", "");

if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Leemos el archivo SQL
$sql = file_get_contents('init.sql');

// Ejecutamos las consultas múltiples
if (mysqli_multi_query($link, $sql)) {
    echo "<h3>Migración ejecutada con éxito. Base de datos lista para usar.</h3>";
    echo "<a href='../index.php'>Ir al inicio del sistema</a>";
} else {
    echo "Error ejecutando la migración: " . mysqli_error($link);
}
mysqli_close($link);
?>