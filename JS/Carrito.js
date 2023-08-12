class Carrito {
    // Añadir producto al carrito
    comprarProducto(e) {
        e.preventDefault();
        if (e.target.classList.contains('buy-btn')) {
            const producto = e.target.parentElement.parentElement;
            console.log(producto.outerHTML); // Mostrar la estructura HTML del producto
        }
    }
}
