<!DOCTYPE html>
<html lang="en">
<?php
include("../../../Modelo/conexion.php");
include('../../../Controller/Administrador/crud_categoria/paginacion_categoria.php');
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
            <h3 class="d-flex justify-content-center">Sección Categoria</h3>
            <div class="row justify-content-between align-items-center">
                <div class="col-auto mt-3">
                    <label for="buscar" class="mr-2 mb-2 ">Filtrar:</label>
                    <input type="text" id="ip_filtrar" class="form-control border-primary" placeholder="Ingrese el nombre ">
                </div>
                <div class="col-auto mt-3">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarmodcategoria">
                        <i class="fas fa-plus"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <table class="table table-sm table-hover table-table-striped mt-4">
                <thead class=" table table-secondary">
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Nombre</td>
                        <td class="text-center">Imagen</td>
                        <td class="text-center">Estado</td>
                        <td class="text-center">Operaciones</td>
                    </tr>
                </thead>
                <tbody id="tablaCategoria">
                    <?php
                    while ($rowp = $resultado_paginacion_cat->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-center"><?php echo $rowp['id_categoria']; ?></td>
                            <td class="text-center"><?php echo $rowp['nombre_categoria']; ?></td>
                            <td class="text-center"> <img src="<?php echo $rowp['img_catg']  ?>" alt="img categoria" style="width: 70px; height: 70px;"></td>
                            <td class="text-center"><?php echo $rowp['estado_categoria']; ?></td>
                            <td class="text-center">
                                <?php $pk = $rowp['id_categoria']; ?>
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodcategoria" data-idcat="<?php echo $pk; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodcategoria" data-idcat="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>
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
    include './eliminarmodcategoria.php';
    include './registrarmodcategoria.php';
    include './editarmodcategoria.php';
    ?>
    <script>
        $(document).ready(function() {
            $("#tablaCategoria").on("click", ".btn-editar", function(){
                var idcat = $(this).data("idcat");
                $.ajax({
                    url: "../../../Controller/Administrador/crud_categoria/obtener_categoria.php",
                    method: "POST",
                    data: {
                        idcat: idcat
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#editarmodcategoria .modal-title").text("Editar Categoria: " + response.nombre_categoria);
                        $("#editarmodcategoria #idcat_e").val(response.id_categoria);
                        $("#editarmodcategoria #nombre_categoria_e").val(response.nombre_categoria);
                    },
                    error: function() {
                        alert("Error al obtener los datos .");
                    }
                });
            });
            $("#tablaCategoria").on("click", ".btn-eliminar", function(){
                var idcat = $(this).data("idcat");
                console.log(idcat);
                $.ajax({
                    url: "../../../Controller/Administrador/crud_categoria/obtener_categoria.php",
                    method: "POST",
                    data: {
                        idcat: idcat
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#eliminarmodcategoria .modal-title").text("Eliminar Categoria: " + response.nombre_categoria);
                        $("#eliminarmodcategoria #idcat").val(response.id_categoria);
                    },
                    error: function() {
                        alert("Error al obtener los datos");
                    }
                });

            });
            $("#ip_filtrar").on("input", function() {
                var filtro = $(this).val();
                $.ajax({
                    url: "../../../Controller/Administrador/crud_categoria/filtrar_categoria.php",
                    method: "POST",
                    data: {
                        filtro: filtro
                    },
                    success: function(response) {
                        $("#tablaCategoria").html(response);
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