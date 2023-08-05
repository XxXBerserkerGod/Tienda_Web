<?php 

include('../../Modelo/conexion.php');

$sql = "SELECT * FROM ubigeo";
$ubigeo = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <form action="/Tienda_Web/Controller/register.php" method="post">
        <div class="form-floating mb-4">
            <input type="text" name="user" class="form-control form-control-lg" placeholder="Usuario">
            <label class="text-dark">Usuario</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña">
            <label class="text-dark">Contraseña</label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombres">
            <label class="text-dark">Nombres</label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" name="apellido" class="form-control form-control-lg" placeholder="Apellidos">
            <label class="text-dark">Apellidos</label>
        </div>
        <div class="form-floating mb-4">
            <input type="number" name="dni" class="form-control form-control-lg" placeholder="DNI">
            <label class="text-dark">DNI</label>
        </div>
        <div class="form-floating mb-4">
            <input type="tel" name="telefono" class="form-control form-control-lg" placeholder="Telefono">
            <label class="text-dark">Telefono</label>
        </div>
        <div class="form-floating mb-4">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
            <label class="text-dark">Email</label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" name="direccion" class="form-control form-control-lg" placeholder="Direccion">
            <label class="text-dark">Direccion</label>
        </div>
        <div class="form-floating mb-4">
            <select name="ubigeo" id="ubigeo">
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
        <button type="submit" class="btn btn-outline-dark btn-lg px-5 me-3">Registrarse</button>
    </form>
</body>
</html>