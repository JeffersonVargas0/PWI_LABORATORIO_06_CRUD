<link rel="stylesheet" href="./css/contenido.css">

<section>
    <p>Contenido principal</p>
    <?php
    if (isset($_POST['listar_noticias'])) {
        include('listar_noticias.php');
    }
    ?>
</section>