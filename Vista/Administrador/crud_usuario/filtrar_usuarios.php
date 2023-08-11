<?php
include("../../../Modelo/conexion.php");
//para cuando no tenga un valor definido el input 
$sqlusu = "SELECT *
from ubigeo ub inner join usuario u ON
ub.id_ubigeo=u.id_ubigeo inner join tipo_usuario tu ON
u.id_tipo_usuario=tu.id_tipo_usuario
where u.id_tipo_usuario=1 
order by id_usu asc ;";
$resultadousu = $conn->query($sqlusu);
include('./paginacion_usuario.php');
//---------------------------------------------

if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    
    $sql_filtrar = "SELECT *
    from ubigeo ub inner join usuario u ON
    ub.id_ubigeo=u.id_ubigeo inner join tipo_usuario tu ON
    u.id_tipo_usuario=tu.id_tipo_usuario
    where user_usu = '$filtro'";
    
    $resultado_filtrado = $conn->query($sql_filtrar);

    if ($resultado_filtrado->num_rows > 0) {
        $output = ''; // Variable para acumular la salida HTML
        while ($rowp = $resultado_filtrado->fetch_assoc()) {
            // Genera el HTML para cada fila
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['user_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['password'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombres_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['apellidos_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['dni_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['telefono_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['correo_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['direccion'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_ubigeo'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_tipo_usuario'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['ruc'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['estado_usu'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar  " data-bs-toggle="modal" data-bs-target="#eliminarmodusuario" data-idusu="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output;
    } else {
        $output = ''; // Variable para acumular la salida HTML
        while ($rowp = $resultado_paginacion_usu->fetch_assoc()) {
            // Genera el HTML para cada fila
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['user_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['password'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombres_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['apellidos_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['dni_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['telefono_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['correo_usu'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['direccion'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_ubigeo'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_tipo_usuario'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['ruc'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['estado_usu'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar  " data-bs-toggle="modal" data-bs-target="#eliminarmodusuario" data-idusu="<?php echo $pk; ?>"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output;
    }
}
