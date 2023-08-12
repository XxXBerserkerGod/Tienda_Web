<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Tienda_Web/Vista/Administrador/Inicio.php"><img src="/Tienda_Web/img/logo1.webp" alt="" class="me-3" style="width: 65px; height: 55px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Operaciones
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink1">
                            <li><a class="dropdown-item" href="/Tienda_Web/Vista/Administrador/crud_producto/Productos.php">Producto</a></li>
                            <li><a class="dropdown-item" href="/Tienda_Web/Vista/Administrador/crud_usuario/usuarios.php">Usuario</a></li>
                            <li><a class="dropdown-item" href="/Tienda_Web/Vista/Administrador/crud_categoria/Categoria.php">Categoria</a></li>
                            <li><a class="dropdown-item" href="/Tienda_Web/Vista/Administrador/crud_marca/Marca.php">Marca</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-download fa-shake fa-md" style="color: #b7b3d1;"></i> Ventas</a></li>
                            <li><a class="dropdown-item" href="/Tienda_Web/Vista/Administrador/Reportes/reporte_usuarios.php"> <i class="fa-solid fa-download fa-shake fa-md" style="color: #b7b3d1;"></i> Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand " href="/Tienda_Web/index.php">
                <i class="fa-solid fa-arrow-right-from-bracket fa-fade fa-md" style="color: #ced4de; "></i>
                Salir</a>

        </div>
    </nav>
</body>

</html>