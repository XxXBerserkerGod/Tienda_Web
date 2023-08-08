08/08/2023
Archivo menunav.php
    Se corrigio el menunav.php que no cambiaba de color en la url localhost/Tienda_Web/.
    Se agrego la logica para que cambie de color a los elementos del dropdown de categorias y marcas del menunav.php.
    Ahora se muestra el nombre del usuario que ha iniciado sesion.
    Se modifico el icono del cerrar sesion para que conversara el estilo del menunav.php.
Archivo sproduct.php
    Se cambio la posicion de la consulta del sql despues de incluir el menunav en el archivo sproduct.php.
    Se agrego la logica para que solo se muestre las tallas cuando el producto pertenerce a la categoria de Ropa en el archivo sproduct.php.
    Se traducieron algunos textos.
    Se agrego la logica para que en la seccion de productos relacionados se muestren los productos de la misma categoria que se esta visualizando.
    Se modifico las migas de pan('Productos/Categoria') para que te muestra la categoria a la que pertenece el producto.
Archivo login.php
    Se agrego otra variable de sesion para que almacene el id del cliente al momento de iniciar sesion.
Archivo logout.php
    Se agrego la logica para vaciar la variable de sesion $_SESSION['usuario'] al cerrar sesion.
