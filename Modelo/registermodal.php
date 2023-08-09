<?php 

include('conexion.php');

$sql = "SELECT * FROM ubigeo";
$ubigeo = $conn->query($sql);

?>

<div class="modal fade" id="register_Modal" tabindex="-1" aria-labelledby="register_ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="register_ModalLabel">Registrarse</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Tienda_Web/Controller/Cliente/register.php" method="post">
                    <div class="form-floating mb-4">
                        <input type="text" name="user" class="form-control form-control-lg" placeholder="Usuario" required>
                        <label class="text-dark">Usuario</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" required>
                        <label class="text-dark">Contraseña</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombres" required>
                        <label class="text-dark">Nombres</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="apellido" class="form-control form-control-lg" placeholder="Apellidos" required>
                        <label class="text-dark">Apellidos</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="number" name="dni" class="form-control form-control-lg" placeholder="DNI" required>
                        <label class="text-dark">DNI</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="number" name="telefono" class="form-control form-control-lg" placeholder="Telefono" required>
                        <label class="text-dark">Telefono</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                        <label class="text-dark">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="direccion" class="form-control form-control-lg" placeholder="Direccion" required>
                        <label class="text-dark">Direccion</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select form-select-lg" name="ubigeo" id="ubigeo">
                            <?php 
                                while($row = $ubigeo->fetch_assoc()) {
                            ?>
                                <option value="<?=$row['id_ubigeo'];?>"><?php echo $row['Distrito']." - ".$row['Provincia']." - ".$row['Departamento'];?></option>
                            <?php 
                                }
                            ?>
                        </select>
                        <label class="text-dark">Ubigeo</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="number" name="ruc" class="form-control form-control-lg" placeholder="Opcional">
                        <label class="text-dark">R.U.C.</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-lg px-5">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>