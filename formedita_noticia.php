<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Edicion de Noticias</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/contenido.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <div id="container">
        <?php
            include("encabezado.php");
            include("lateral.php");
        ?>
        <section>
            <?php
                include("conexion.php");
                $link = conectarse();
                $id = $_GET['id'];
                $sql = "SELECT * FROM noticias WHERE id='$id'";
                $rs = mysqli_query($link, $sql);
                $campo = mysqli_fetch_array($rs);
            ?>
            <h3>EDITAR NOTICIA</h3>
            <form method="post" action="edita_noticia.php">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo $campo["titulo"]; ?>" size="50" /> <br><br>

                <label for="autor">Autor: </label>
                <input type="text" name="autor" id="autor" value="<?php echo $campo["autor"]; ?>" size="35" /> <br><br>

                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" id="categoria" value="<?php echo $campo["categoria"]; ?>" size="35" /> <br><br>

                <label for="articulo">Articulo:</label><br>
                <textarea name="articulo" id="articulo" cols="70" rows="10"><?php echo $campo["articulo"]; ?></textarea><br><br>

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?php echo $campo["fecha"]; ?>" /> <br><br>

                <input type="submit" name="enviar" value="Editar noticia"/>
                <input type="hidden" value="<?php echo $id; ?>" name="id" />
            </form>
        </section>
        <?php include("piepag.php"); ?>
    </div>
</body>
</html>