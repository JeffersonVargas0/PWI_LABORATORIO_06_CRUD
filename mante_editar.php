<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Mantenimiento Editar Noticias</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <div id="container">
        <?php
            include('encabezado.php');
            include('lateral.php');
        ?>
        <section>
            <?php
                include("conexion.php");
                $link = conectarse();
                $instruccion = "SELECT * FROM noticias ORDER BY fecha DESC";
                $rs = mysqli_query($link, $instruccion) or die("Fallo en la Consulta");
            ?>
            <br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Noticia</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Fecha</th>
                    <th>Operación</th>
                </tr>
                <?php
                    while ($campo = mysqli_fetch_array($rs)) {
                ?>
                <tr>
                    <td><?php echo $campo["id"]; ?></td>
                    <td><?php echo $campo["titulo"]; ?></td>
                    <td><?php echo $campo["articulo"]; ?></td>
                    <td><?php echo $campo["autor"]; ?></td>
                    <td><?php echo $campo["categoria"]; ?></td>
                    <td><?php echo $campo["fecha"]; ?></td>
                    <td width="74" class="Estilo7">
                        <a href='formedita_noticia.php?id=<?php echo $campo['id']; ?>'>Modificar</a>
                    </td>
                </tr>
                <?php
                    }
                    mysqli_close($link);
                ?>
            </table>
        </section>
        <?php include('piepag.php'); ?>
    </div>
</body>
</html>