class Carrito {
    // Añadir producto al carrito
    comprarProducto(e) {
        e.preventDefault();
        if (e.target.classList.contains('buy-btn')) {
            let producto = e.target.parentElement.parentElement;

            this.leerDatosProducto(producto);
        }
    }
    leerDatosProducto(producto) {
        const infoProducto = {
            imagen: producto.querySelector('img').src,
            titulo: producto.querySelector('h5').textContent,
            precio: producto.querySelector('h4').textContent,
            id: producto.querySelector('button').getAttribute('data-id'),
            cantidad: 1
        }
        this.insertarCarrito(infoProducto);
    }

    insertarCarrito(producto) {
        const row = document.createElement('tr');
        row.innerHTML =
            `
        <td> 
            <img src="${producto.imagen}" width=50>
        </td>
        <td> 
            ${producto.titulo + console.log(producto.id)} 
        </td>
        <td> 
            ${producto.precio}
        </td>
        <td> 
            <a href="#" class="borrar-producto fas fa-times-circle" data-id"${producto.id}"></a>
        </td>
        `;
        listaProducto.appendChild(row);
    }
}

