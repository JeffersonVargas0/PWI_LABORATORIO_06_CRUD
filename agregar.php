<?php
    include("conexion.php");

    // Recibimos las variables enviadas por el formulario
    $titulo = $_POST['titulo'];
    $articulo = $_POST['articulo'];
    $categoria = $_POST['categoria'];
    $autor = $_POST['autor'];

    $link = conectarse();

    // Insertamos los registros usando now() para la fecha actual
    $instruccion = "INSERT INTO noticias (titulo, articulo, categoria, autor, fecha) VALUES ('$titulo', '$articulo', '$categoria', '$autor', now())";

    $rs = mysqli_query($link, $instruccion) or die("Fallo en la consulta: " . mysqli_error($link));

    if ($rs == 1) {
        echo "<br>";
        echo "<script language='javascript'>";
        echo "window.alert('El Registro fue Insertado con Exito');";
        echo "</script>";
        echo "<hr><br>";
        echo "<a href='listar_noticias.php'>Retornar</a>";
    } else {
        echo "<br>";
        echo "<script language='javascript'>";
        echo "window.alert('Error al Insertar el registro');";
        echo "</script>";
        echo "<br><br>";
        echo "<a href='form_agregar.php'>Retornar</a>";
    }
?>