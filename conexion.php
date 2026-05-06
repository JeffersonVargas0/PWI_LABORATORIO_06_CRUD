<?php
    /**
     * Función para conectar con la base de datos
     * @return mysqli Connection object
     */
    function conectarse() {
        if (!($link = mysqli_connect("localhost", "root", "", "tacna21"))) {
            echo "Error conectando a la base de datos";
            exit();
        }
        return $link;
    }
?>