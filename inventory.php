<?php
require 'includes/app.php';
estaAutenticado();
incluirTemplate('header');

// Consulta a la base de datos para obtener las categorías
$db = conectarDB();
$queryCategorias = "SELECT * FROM categoriaproducto;";
$resultadoCategorias = mysqli_query($db, $queryCategorias);

// Consulta a la base de datos para obtener los productos con su categoría
$queryProductos = "SELECT 
    p.id,
    p.nombre,
    p.precio,
    p.cantidad,
    cp.descripcion AS categoria
FROM 
    producto p
JOIN 
    categoriaproducto cp ON p.CategoriaProducto_id = cp.id;";
$resultadoProductos = mysqli_query($db, $queryProductos);
?>

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
                <?php while($producto = mysqli_fetch_assoc($resultadoProductos)): ?>
                    <tr class="inventory-table__row">
                        <td class="inventory-table__data"><?php echo htmlspecialchars($producto['id']); ?></td>
                        <td class="inventory-table__data"><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td class="inventory-table__data"><?php echo htmlspecialchars($producto['categoria']); ?></td>
                        <td class="inventory-table__data"><?php echo htmlspecialchars($producto['cantidad']); ?></td>
                        <td class="inventory-table__data"><?php echo number_format($producto['precio'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endwhile; ?>
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
            <?php while($categoria = mysqli_fetch_assoc($resultadoCategorias)): ?>
                <div class="category-list__item">
                    <img src="src/img/icon_<?php echo htmlspecialchars($categoria['id']); ?>.png" alt="<?php echo htmlspecialchars($categoria['descripcion']); ?>" class="category-list__icon-img">
                    <span class="category-list__name"><?php echo htmlspecialchars($categoria['descripcion']); ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </aside>
</div>

<script src="src\inventario.js"></script>
</body>
</html>