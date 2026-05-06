<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Procesando Edición</title>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    <?php
        include("conexion.php");
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $articulo = $_POST['articulo'];
        $fecha = $_POST['fecha'];

        $link = conectarse();

        // Actualizar registro en la base de datos
        $sql = "UPDATE noticias SET titulo='$titulo', autor='$autor', categoria='$categoria', articulo='$articulo', fecha='$fecha' WHERE id='$id'";
        $rs = mysqli_query($link, $sql);

        if ($rs == 1) {
            echo "<br><center><h3>El Registro fue Actualizado con Exito</h3></center><br>";
            echo "<center><a href='listar_noticias.php'>Retornar</a></center>";
        } else {
            echo "<br><center><h3>Error al Actualizar el registro</h3></center><br>";
            echo "<center><a href='mante_editar.php'>Retornar</a></center>";
        }
    ?>
</body>
</html>