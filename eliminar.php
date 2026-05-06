<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Procesando Eliminación</title>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    <?php
        include("conexion.php");
        $link = conectarse();
        $id = $_GET["id"];

        if (isset($id)) {
            $instruccion = "DELETE FROM noticias WHERE id='$id'";
            $result = mysqli_query($link, $instruccion);
            
            echo "<br><br><center><h3>El Registro fue eliminado con exito</h3></center><br><hr><br>";
            echo "<center><a href='listar_noticias.php'>Retornar</a></center>";
        } else {
            echo "<br><center><h3>Error al Eliminar Registro</h3></center><br><hr><br>";
            echo "<center><a href='mante_eliminar.php'>Retornar</a></center>";
        }
    ?>
</body>
</html>