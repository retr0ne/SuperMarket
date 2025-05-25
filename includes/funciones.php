<?php

define('TEMPLATE_URL', __DIR__ . '/templates');

function incluirTemplate(string $nombre, bool $login = false) {
    include TEMPLATE_URL . "/{$nombre}.php";
}

function estaAutenticado() {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}