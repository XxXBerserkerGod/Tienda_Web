<!DOCTYPE html>
<html lang="en">
<?php
include("../../../Modelo/conexion.php");
$sql = "SELECT * 
from producto;";
$resultado = $conn->query($sql);
?>
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
                        <td>Stock</td>
                        <td>Img Principal</td>
                        <td>Img s1</td>
                        <td>Img s2</td>
                        <td>Estado</td>
                        <td>Marca</td>
                        <td>Categoria</td>
                        <td>P.O</td>
                        <td>F.C</td>
                        <td>Talla</td>
                        <td>Color</td>
                        <td>Operaciones</td>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row=$resultado->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['id_producto'];?></td>
                            <td><?php echo $row['nombre_producto'];?></td>
                            <td><?php echo substr($row['descripcion'],0,20);?></td>
                            <td><?php echo $row['precio_producto'];?></td>
                            <td><?php echo $row['stock'];?></td>
                            <td> <img src=" <?php echo $row["img_principal"];?>" alt="img Principal" style="width: 70px; height: 70px;"></td>
                            <td> <img src="<?php echo $row["img_uno"];?>" alt="img Sub 1 " style="width: 70px; height: 70px;"></td>
                            <td> <img src=" <?php echo $row["img_dos"];?>" alt="img Sub 2" style="width: 70px; height: 70px;"></td>
                            <td><?php echo $row['codigo_estado'];?></td>
                            <td><?php echo $row['id_marca'];?></td>
                            <td><?php echo $row['id_categoria'];?></td>
                            <td><?php echo $row['precio_oferta'];?></td>
                            <td><?php echo $row['fecha_caducidad'];?></td>
                            <td><?php echo $row['id_talla'];?></td>
                            <td><?php echo $row['id_color'];?></td>
                            <td>
                                <?php $pk = $row['id_producto']; ?>
                                <a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmod" data-idprod="<?php echo $pk; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmod" data-idprod="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </section>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>