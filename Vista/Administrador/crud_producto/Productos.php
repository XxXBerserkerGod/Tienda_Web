<!DOCTYPE html>
<html lang="en">
<?php
include("../../../Modelo/conexion.php");
include('../../../Controller/Administrador/crud_producto/paginacion_producto.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                    <label for="buscar" class="mr-2 mb-2 ">Filtrar:</label>
                    <input type="text" id="ip_filtrar" class="form-control border-primary" placeholder="Ingrese el nombre ">
                </div>
                <div class="col-auto mt-3">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarmodprod">
                        <i class="fas fa-plus"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <table class="table table-sm table-hover table-table-striped mt-4">
                <thead class=" table table-secondary">
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Nombre</td>
                        <td class="text-center">Descripción</td>
                        <td class="text-center">Precio Unitario</td>
                        <td class="text-center">Stock</td>
                        <td class="text-center">Imagen Principal</td>
                        <td class="text-center">Sub Imagen 1</td>
                        <td class="text-center">Sub Imagen 2</td>
                        <td class="text-center">Estado</td>
                        <td class="text-center">Id Marca</td>
                        <td class="text-center">Id Categoria</td>
                        <td class="text-center">Precio Oferta</td>
                        <td class="text-center">Fecha Caduc.</td>
                        <td class="text-center">Id Talla</td>
                        <td class="text-center">Id Color</td>
                        <td class="text-center">Operaciones</td>
                    </tr>
                </thead>
                <tbody id="tablaProductos">
                    <?php
                    while ($rowp = $resultado_paginacion->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-center"><?php echo $rowp['id_producto']; ?></td>
                            <td class="text-center"><?php echo $rowp['nombre_producto']; ?></td>
                            <td class="text-center"><?php echo substr($rowp['desc_prod'], 0, 20); ?></td>
                            <td class="text-center"><?php echo $rowp['precio_producto']; ?></td>
                            <td class="text-center"><?php echo $rowp['stock']; ?></td>
                            <td class="text-center"> <img src="<?php echo $rowp["img_principal"]; ?>" alt="img Principal" style="width: 70px; height: 70px;"></td>
                            <td class="text-center"> <img src="<?php echo $rowp["img_uno"]; ?>" alt="img Sub 1 " style="width: 70px; height: 70px;"></td>
                            <td class="text-center"> <img src="<?php echo $rowp["img_dos"]; ?>" alt="img Sub 2" style="width: 70px; height: 70px;"></td>
                            <td class="text-center"><?php echo $rowp['n_estado']; ?></td>
                            <td class="text-center"><?php echo $rowp['id_marca']; ?></td>
                            <td class="text-center"><?php echo $rowp['id_categoria']; ?></td>
                            <td class="text-center"><?php echo ($rowp['precio_oferta'] !== null) ? $rowp['precio_oferta'] : "---"; ?></td>
                            <td class="text-center"><?php echo ($rowp['fecha_caducidad'] !== null) ? $rowp['fecha_caducidad'] : "---"; ?></td>
                            <td class="text-center"><?php echo ($rowp['id_talla'] !== null) ? $rowp['id_talla'] : "---"; ?></td>
                            <td class="text-center"><?php echo ($rowp['id_color'] !== null) ? $rowp['id_color'] : "---"; ?></td>
                            <td class="text-center">
                                <?php $pk = $rowp['id_producto']; ?>
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodprod" data-idprod="<?php echo $pk; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodprod" data-idprod="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <ul class="pagination justify-content-center m-0">
                <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
                    <li class="page-item <?php if ($i == $pagina_actual) echo 'active'; ?>"><a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php
    include './eliminarmodprod.php';
    include './registrarmodprod.php';
    include './editarmodprod.php';
    ?>
    <script>
        $(document).ready(function() {
            $("#tablaProductos").on("click", ".btn-editar", function() {
                var idprod = $(this).data("idprod");
                $.ajax({
                    url: "../../../Controller/Administrador/crud_producto/obtener_producto.php",
                    method: "POST",
                    data: {
                        idprod: idprod
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#editarmodprod .modal-title").text("Editar Producto #" + response.id_producto);
                        $("#editarmodprod #idprod_e").val(response.id_producto);
                        $("#editarmodprod #nombre_producto_e").val(response.nombre_producto);
                        $("#editarmodprod #descripcion_e").val(response.descripcion);
                        $("#editarmodprod #precio_producto_e").val(response.precio_producto);
                        $("#editarmodprod #stock_e").val(response.stock);
                        $("#editarmodprod #codigo_estado_e").val(response.codigo_estado);
                        $("#editarmodprod #id_marca_e").val(response.id_marca);
                        $("#editarmodprod #id_categoria_e").val(response.id_categoria);
                        $("#editarmodprod #precio_oferta_e").val(response.precio_oferta);
                        $("#editarmodprod #fecha_caducidad_e").val(response.fecha_caducidad);
                        $("#editarmodprod #id_talla_e").val(response.id_talla);
                        $("#editarmodprod #id_color_e").val(response.id_color);
                    },
                    error: function() {
                        alert("Error al obtener los datos .");
                    }
                });
            });
            $("#tablaProductos").on("click", ".btn-eliminar", function() {
                var idprod = $(this).data("idprod");
                console.log(idprod);
                $.ajax({
                    url: "../../../Controller/Administrador/crud_producto/obtener_producto.php",
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

            });
            $("#ip_filtrar").on("input", function() {
                var filtro = $(this).val();

                $.ajax({
                    url: "../../../Controller/Administrador/crud_producto/filtrar_productos.php",
                    method: "POST",
                    data: {
                        filtro: filtro
                    },
                    success: function(response) {
                        $("#tablaProductos").html(response);
                    },
                    error: function() {
                        alert("Error al filtrar los datos.");
                    }
                });
            });

        });
    </script>


</body>

</html>