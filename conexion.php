<?php

// Conectar con el servidor de datos
function conectarse() {
    if (!($link = mysqli_connect("localhost", "root", "", "tacna21"))) {
        echo "Error conectando a la base de datos";
        exit();
    }
    return $link;
}

?>