<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ingreso de Noticias</title>
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
            <br>
            <form action="agregar.php" method="post">
                <h2>Ingreso de Noticias</h2>
                <label for="titulo">Titulo: </label>
                <input type="text" name="titulo" id="titulo" placeholder="Ingresa titulo de la noticia" required /> <br><br>

                <label for="autor">Autor: </label>
                <input type="text" name="autor" id="autor" placeholder="Ingrese el autor" required/> <br><br>

                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" id="categoria" placeholder="Ingrese la categoria" required /> <br><br>

                <label for="articulo">Articulo:</label><br>
                <textarea name="articulo" id="articulo" cols="70" rows="15" required>Ingrese el contenido de la noticia</textarea><br><br>

                <input type="submit" name="enviar" value="Enviar noticia"/>
            </form>
        </section>
        <?php include("piepag.php"); ?>
    </div>
</body>
</html>