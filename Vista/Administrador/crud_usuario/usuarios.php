<!DOCTYPE html>
<html lang="en">
<?php
include("../../../Modelo/conexion.php");
include('../../../Controller/Administrador/crud_usuario/paginacion_usuario.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
    include("../Navbar.php");
    ?>
    <section>
        <div class="container py-3 ">
            <h3 class="d-flex justify-content-center">Sección Usuarios</h3>
            <div class="row justify-content-between align-items-center">
                <div class="col-auto mt-3">
                    <label for="buscar" class="mr-2 mb-2 ">Filtrar:</label>
                    <input type="text" id="ip_filtrar" class="form-control border-primary" placeholder="Ingrese el usuario">
                </div>
            </div>
            <table class="table table-sm table-hover table-table-striped mt-4">
                <thead class=" table table-secondary">
                    <tr>
                        <td class="text-center">ID</td>
                        <td class="text-center">Usuario</td>
                        <td class="text-center">Contraseña</td>
                        <td class="text-center">Nombres</td>
                        <td class="text-center">Apellidos</td>
                        <td class="text-center">Dni</td>
                        <td class="text-center">Telefono</td>
                        <td class="text-center">Correo</td>
                        <td class="text-center">Direccion</td>
                        <td class="text-center">Id Ubigeo</td>
                        <td class="text-center">Tipo Usuario</td>
                        <td class="text-center">Ruc</td>
                        <td class="text-center">Estado</td>
                        <td class="text-center">Operaciones</td>
                    </tr>
                </thead>
                <tbody id="tablausuarios">
                    <?php
                    while ($rowp = $resultado_paginacion_usu->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-center"><?php echo $rowp['id_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['user_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['password']; ?></td>
                            <td class="text-center"><?php echo $rowp['nombres_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['apellidos_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['dni_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['telefono_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['correo_usu']; ?></td>
                            <td class="text-center"><?php echo $rowp['direccion']; ?></td>
                            <td class="text-center"><?php echo $rowp['id_ubigeo']; ?></td>
                            <td class="text-center"><?php echo $rowp['nombre_tipo_usuario']; ?></td>
                            <td class="text-center"><?php echo $rowp['ruc']; ?></td>
                            <td class="text-center"><?php echo $rowp['estado_usu']; ?></td>
                            <td class="text-center">
                                <?php $pk = $rowp['id_usu']; ?>
                                <a href="#" class="btn btn-danger btn-eliminar  " data-bs-toggle="modal" data-bs-target="#eliminarmodusuario" data-idusu="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>
                                <a href="#" class="btn btn-primary btn-activar  " data-bs-toggle="modal" data-bs-target="#activarmodusuario" data-idusu="<?php echo $pk; ?>"><i class="fa-solid fa-user-plus fa-fade" style="color: #e5ebf5;"></i></a>

                            </td>
                        </tr>
                    <?php } ?>
                    </ul>
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
    include './eliminarmodusuario.php';
    include './activarmodusuario.php';
    ?>
    <script>
        $(document).ready(function() {
            $("#tablausuarios").on("click", ".btn-eliminar", function() {
                var idusu = $(this).data("idusu");
                console.log(idusu);
                $.ajax({
                    url: "../../../Controller/Administrador/crud_usuario/obtener_usuario.php",
                    method: "POST",
                    data: {
                        idusu: idusu
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#eliminarmodusuario .modal-title").text("Eliminar Usuario:" + response.user_usu);
                        $("#eliminarmodusuario #idusu").val(response.id_usu);
                    },
                    error: function() {
                        alert("Error al obtener los datos");
                    }
                });


            });
            $("#tablausuarios").on("click", ".btn-activar", function() {
                var idusu = $(this).data("idusu");
                console.log(idusu);
                $.ajax({
                    url: "../../../Controller/Administrador/crud_usuario/obtener_usuario.php",
                    method: "POST",
                    data: {
                        idusu: idusu
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#activarmodusuario .modal-title").text("Habilitar Usuario: " + response.user_usu);
                        $("#activarmodusuario #idusu").val(response.id_usu);
                    },
                    error: function() {
                        alert("Error al obtener los datos");
                    }
                });
            });
            $("#ip_filtrar").on("input", function() {
                var filtro = $(this).val();
                $.ajax({
                    url: "../../../Controller/Administrador/crud_usuario/filtrar_usuarios.php",
                    method: "POST",
                    data: {
                        filtro: filtro
                    },
                    success: function(response) {
                        $("#tablausuarios").html(response);
                    },
                    error: function() {
                        alert("Error al filtrar los datos.");
                    }
                });
            })

        });
    </script>
</body>

</html>