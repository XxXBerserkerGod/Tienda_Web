<?php
include_once '../../../Modelo/conexion.php';
if (isset($_POST["idusu"])) {
    $idusu = $_POST['idusu'];
    $sqlop = "SELECT *
    from ubigeo ub inner join usuario u ON
    ub.id_ubigeo=u.id_ubigeo inner join tipo_usuario tu ON
    u.id_tipo_usuario=tu.id_tipo_usuario
    where u.id_usu =$idusu";
    $result = $conn->query($sqlop);
    if ($result->num_rows > 0) {
        $prod= $result->fetch_assoc();
        echo json_encode($prod);
    } else {
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID del Usuario invalido']);
}

?>