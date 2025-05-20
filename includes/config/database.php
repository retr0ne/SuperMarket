<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'supermarket');

    if (!$db) {
        echo "Error no se pudo Conectar";
        exit;
    }

    return $db;
}