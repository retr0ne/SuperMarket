<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperMarket - Login</title>
    <link rel="stylesheet" href="src/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php if (isset($login) && $login === false): ?>
    <header class="header">
        <div class="header__nav">
            <button class="header__button header__button--user">
                <i class="bi bi-person-fill header__button-icon"></i>
                <span>Bryan C.</span>
            </button>
            <button class="header__button header__button--active">Inventario</button>
            <div class="header__dropdown dropdown">
                <button class="header__button dropdown__toggle-button">Venta</button>
                <div class="dropdown__content">
                    <a href="#" id="new-sale-link" class="dropdown__item">Nueva Venta</a>
                </div>
            </div>
        </div>
        <div class="header__logo-container">
            <img src="src/img/logo_whitecrown.png" alt="Logo Corona" class="header__logo-image">
        </div>
    </header>
<?php endif; ?>