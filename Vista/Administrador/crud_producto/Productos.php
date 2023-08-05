<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../CSS/bootstrap.css">
    <script src="../../../JS/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
    include("../Navbar.php");
    ?>

    <section>
        <div class="container py-3 ">
            <h3 class="d-flex justify-content-center">Sección Productos</h3>
            <div class="row justify-content-between align-items-center">
                <div class="col-auto mt-3">
                    <label for="buscar" class="mr-2 mb-2">Buscar:</label>
                    <input type="text" id="buscar" class="form-control" placeholder="Ingresar codigo producto">
                </div>
                <div class="col-auto mt-3">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new_Modal">
                        <i class="fas fa-plus"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <table class="table table-sm table-hover table-table-striped mt-4">
                <thead class=" table table-secondary">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Precio Unitario</td>
                        <td>Img Principal</td>
                        <td>Estado</td>
                        <td>Marca</td>
                        <td>Categoria</td>
                        <td>Precio Oferta</td>
                        <td>Fecha de Caducida</td>
                        <td>Talla</td>
                        <td>Color</td>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>dsadasd</td>
                        <td>

                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </section>
</body>

</html>