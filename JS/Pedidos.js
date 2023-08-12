const carro = new Carrito();
const carrito = document.getElementById('carrito');
const productos = document.getElementById('lista-productos');
const listaProducto = document.querySelector('#lista-carrito tbody');

cargarEventos();

function cargarEventos() {
    productos.addEventListener('click', (e) => { carro.comprarProducto(e) });

}