<?php

define('TEMPLATE_URL', __DIR__ . '/templates');

function incluirTemplate(string $nombre) {
    include TEMPLATE_URL . "/{$nombre}.php";
}

function estaAutenticado() : bool {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
    return false;
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}