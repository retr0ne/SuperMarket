document.addEventListener('DOMContentLoaded', function() {
    // Dropdown para el botón "Venta"
    const dropdownToggleButton = document.querySelector('.dropdown__toggle-button');
    const dropdownContent = document.querySelector('.dropdown__content');

    // Muestra/oculta el dropdown al hacer clic en el botón "Venta"
    if (dropdownToggleButton) {
        dropdownToggleButton.addEventListener('click', function() {
            dropdownContent.classList.toggle('dropdown__content--show');
        });
    }

    // Cierra el dropdown si el usuario hace clic fuera de él
    window.addEventListener('click', function(event) {
        // Verifica si el clic no fue en el botón de toggle ni dentro del contenido del dropdown
        if (dropdownToggleButton && !event.target.matches('.dropdown__toggle-button') && !event.target.closest('.dropdown__content')) {
            if (dropdownContent && dropdownContent.classList.contains('dropdown__content--show')) {
                dropdownContent.classList.remove('dropdown__content--show');
            }
        }
    });

    // Evento para el botón "Nueva Venta" (puedes añadir la lógica de redirección aquí)
    const newSaleLink = document.getElementById('new-sale-link');
    if (newSaleLink) {
        newSaleLink.addEventListener('click', function(event) {
            event.preventDefault(); // Previene la acción por defecto del enlace
            alert('Redirigiendo a la página de Nueva Venta...');
            // window.location.href = 'url_de_nueva_venta.html'; // Descomenta y cambia la URL
        });
    }

    // Lógica para el botón de "Inventario"
    const inventoryButton = document.querySelector('.header__button--active');
    if (inventoryButton) {
        inventoryButton.addEventListener('click', function() {
            console.log('Ya estás en la página de inventario!');
        });
    }

    // Lógica para el botón de usuario (Bryan C.)
    const userButton = document.querySelector('.header__button--user');
    if (userButton) {
        userButton.addEventListener('click', function() {
            alert('Información del usuario: Bryan C.');
        });
    }

    // Lógica para el botón de búsqueda
    const searchButton = document.querySelector('.search-bar__button');
    const searchInput = document.querySelector('.search-bar__input');
    if (searchButton && searchInput) {
        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.toLowerCase();
            alert('Buscando: ' + searchTerm);
            // Aquí implementarías la lógica de filtrado de la tabla
        });
    }

    // Lógica para los items de categoría (simplemente un log de ejemplo)
    const categoryItems = document.querySelectorAll('.category-list__item');
    categoryItems.forEach(item => {
        item.addEventListener('click', function() {
            // Ahora, en lugar de '.category-list__icon', buscamos el texto del span
            const categoryName = this.querySelector('.category-list__name').textContent;
            alert('Categoría seleccionada: ' + categoryName);
            // Aquí implementarías la lógica de filtrado de la tabla por categoría
        });
    });
});