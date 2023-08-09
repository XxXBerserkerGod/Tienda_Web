<!DOCTYPE html>
<html lang="en">
<?php
include("../../../Modelo/conexion.php");
$sqlX = "SELECT * 
from producto;";
$resultadox = $conn->query($sqlX);
?>
<!----/Tienda_Web/Vista/Administrador/crud_producto/Productos.php--->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../CSS/bootstrap.css">

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
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarmod">
                        <i class="fas fa-plus"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <table class="table table-sm table-hover table-table-striped mt-4">
                <thead class=" table table-secondary">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>DescripciÃ³n</td>
                        <td>Precio Unitario</td>
                        <td>Stock</td>
                        <td>Img Principal</td>
                        <td>Img s1</td>
                        <td>Img s2</td>
                        <td>Estado</td>
                        <td>Id Marca</td>
                        <td>Id Categoria</td>
                        <td>Precio Oferta</td>
                        <td>Fecha Caduc.</td>
                        <td>Id Talla</td>
                        <td>Id Color</td>
                        <td>Operaciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rowp = $resultadox->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $rowp['id_producto']; ?></td>
                            <td><?php echo $rowp['nombre_producto']; ?></td>
                            <td><?php echo substr($rowp['descripcion'], 0, 20); ?></td>
                            <td><?php echo $rowp['precio_producto']; ?></td>
                            <td><?php echo $rowp['stock']; ?></td>
                            <td> <img src=" <?php echo $rowp["img_principal"]; ?>" alt="img Principal" style="width: 70px; height: 70px;"></td>
                            <td> <img src="<?php echo $rowp["img_uno"]; ?>" alt="img Sub 1 " style="width: 70px; height: 70px;"></td>
                            <td> <img src=" <?php echo $rowp["img_dos"]; ?>" alt="img Sub 2" style="width: 70px; height: 70px;"></td>
                            <td><?php echo $rowp['codigo_estado']; ?></td>
                            <td><?php echo $rowp['id_marca']; ?></td>
                            <td><?php echo $rowp['id_categoria']; ?></td>
                            <td><?php echo ($rowp['precio_oferta'] !== null) ? $rowp['precio_oferta'] : "---"; ?></td>
                            <td><?php echo ($rowp['fecha_caducidad'] !== null) ? $rowp['fecha_caducidad'] : "---"; ?></td>
                            <td><?php echo ($rowp['id_talla'] !== null) ? $rowp['id_talla'] : "---"; ?></td>
                            <td><?php echo ($rowp['id_color'] !== null) ? $rowp['id_color'] : "---"; ?></td>
                            <td>
                                <?php $pk = $rowp['id_producto']; ?>
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmod" data-idprod="<?php echo $pk; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodprod" data-idprod="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </section>

    <?php
    include './eliminarmodprod.php';
    include './registrarmod.php';
    ?>

    <script src="../../../JS/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $(".btn-eliminar").click(function() {
                var idprod = $(this).data("idprod");
                console.log(idprod);
                $.ajax({
                    url: "obtener_producto.php",
                    method: "POST",
                    data: {
                        idprod: idprod
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#eliminarmodprod .modal-title").text("Eliminar Producto #" + response.id_producto);
                        $("#eliminarmodprod #idprod").val(response.id_producto);
                    },
                    error: function() {
                        alert("Error al obtener los datos");
                    }
                });

            })

        });
    </script>


</body>

</html>