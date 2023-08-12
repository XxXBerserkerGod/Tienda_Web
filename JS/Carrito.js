class Carrito {
    //Añadir producto al carrito
    comprarProducto(e) {
        e.preventDefault();
        if (e.target.classList.contains('buy-btn')) {
            const producto = e.target.parentElement.parentElement;
            // this.leerDatosProducto(producto);
            console.log(producto);
        }
    }
}   
