<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/bootstrap.css">
    <script src="../../JS/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
     <!--   <img src="/Tienda_Web/img/logo1.png" alt="" class="me-3" style="width: 120px; height: 50px;">
            <a class="navbar-brand" href="/Tienda_Web/Vista/Administrador/Inicio.php">Inicio</a>-->
            <a class="navbar-brand" href="/proyecto/Vista/Administrador/Inicio.php"><img src="/Tienda_Web/img/logo1.png" alt="" class="me-3" style="width: 120px; height: 44px;"></a>
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
                            <li><a class="dropdown-item" href="#">Categoria</a></li>
                            <li><a class="dropdown-item" href="#">Marca</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-download fa-shake fa-md" style="color: #b7b3d1;"></i> Ventas</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-download fa-shake fa-md" style="color: #b7b3d1;"></i> Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand " href="/Tienda_Web/Vista/Administrador/Inicio.php">
                <i class="fa-solid fa-arrow-right-from-bracket fa-fade fa-md" style="color: #ced4de; "></i>
                Salir</a>

        </div>
    </nav>
</body>

</html>