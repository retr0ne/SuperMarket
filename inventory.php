<?php
require 'includes/app.php';
incluirTemplate('header');
?>
<body>
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

    <div class="main-layout">
        <section class="inventory-table-section">
            <table class="inventory-table">
                <thead class="inventory-table__header">
                    <tr class="inventory-table__row">
                        <th class="inventory-table__heading">ID</th>
                        <th class="inventory-table__heading">Nombre</th>
                        <th class="inventory-table__heading">Categoría</th>
                        <th class="inventory-table__heading">Cantidad disponible</th>
                        <th class="inventory-table__heading">Valor unitario (COP)</th>
                    </tr>
                </thead>
                <tbody class="inventory-table__body">
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">1</td>
                        <td class="inventory-table__data">Papas Margarita Limón</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">15</td>
                        <td class="inventory-table__data">2.200</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">2</td>
                        <td class="inventory-table__data">Papas Margarita Pollo</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">23</td>
                        <td class="inventory-table__data">2.200</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">3</td>
                        <td class="inventory-table__data">Papas Margarita Naturales</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">22</td>
                        <td class="inventory-table__data">2.200</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">4</td>
                        <td class="inventory-table__data">Detodito Mix</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">33</td>
                        <td class="inventory-table__data">2.800</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">5</td>
                        <td class="inventory-table__data">Detodito Natural</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">34</td>
                        <td class="inventory-table__data">2.800</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">6</td>
                        <td class="inventory-table__data">Detodito Bbq</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">9</td>
                        <td class="inventory-table__data">2.800</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">7</td>
                        <td class="inventory-table__data">Detodito Criollo</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">12</td>
                        <td class="inventory-table__data">2.800</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">8</td>
                        <td class="inventory-table__data">Chocoramo</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">20</td>
                        <td class="inventory-table__data">3.000</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">9</td>
                        <td class="inventory-table__data">Posta Gala Ramo</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">30</td>
                        <td class="inventory-table__data">2.500</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">10</td>
                        <td class="inventory-table__data">Pasta Gala Bimbo</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">21</td>
                        <td class="inventory-table__data">2.800</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">11</td>
                        <td class="inventory-table__data">Trident's Fresa (4 unds)</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">12</td>
                        <td class="inventory-table__data">2.000</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">12</td>
                        <td class="inventory-table__data">Trident's Menta (4 unds)</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">20</td>
                        <td class="inventory-table__data">2.000</td>
                    </tr>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data">13</td>
                        <td class="inventory-table__data">Trident's Sandia (4 unds)</td>
                        <td class="inventory-table__data">Dulces y Snacks</td>
                        <td class="inventory-table__data">5</td>
                        <td class="inventory-table__data">2.000</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <aside class="category-sidebar">
            <h3 class="category-sidebar__title">CATEGORÍAS</h3>
            <div class="search-bar">
                <input type="text" placeholder="Buscar producto..." class="search-bar__input">
                <button class="search-bar__button">
                    <i class="bi bi-search search-bar__icon"></i>
                </button>
            </div>
            <div class="category-list">
                <div class="category-list__item">
                    <img src="src/img/icon_bebida.png" alt="Bebidas" class="category-list__icon-img">
                    <span class="category-list__name">Bebidas</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_bebidaalcoholica.png" alt="Bebidas Alcohólicas" class="category-list__icon-img">
                    <span class="category-list__name">Bebidas Alcohólicas</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_dulcesysnacks.png" alt="Dulces y Snacks" class="category-list__icon-img">
                    <span class="category-list__name">Dulces y Snacks</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_carnes.png" alt="Carnes" class="category-list__icon-img">
                    <span class="category-list__name">Carnes</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_frutas.png" alt="Frutas" class="category-list__icon-img">
                    <span class="category-list__name">Frutas</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_lacteos.png" alt="Lácteos" class="category-list__icon-img">
                    <span class="category-list__name">Lácteos</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_aseopersonal.png" alt="Aseo Personal" class="category-list__icon-img">
                    <span class="category-list__name">Aseo Personal</span>
                </div>
                <div class="category-list__item">
                    <img src="src/img/icon_aseo.png" alt="Aseo" class="category-list__icon-img">
                    <span class="category-list__name">Aseo</span>
                </div>
            </div>
        </aside>
    </div>

    <script src="inventario.js"></script>
</body>
</html>