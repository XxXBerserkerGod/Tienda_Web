<?php
include("../../../Modelo/conexion.php");
include('./paginacion_usuario.php');
if (isset($_POST['filtro'])){
    $filtro = $_POST['filtro'];
    $sql_filtrar = "SELECT *
    from ubigeo ub inner join usuario u ON
    ub.id_ubigeo=u.id_ubigeo inner join tipo_usuario tu ON
    u.id_tipo_usuario=tu.id_tipo_usuario
    WHERE u.user_usu LIKE '$filtro%' and u.id_tipo_usuario=1";
    $resultado_filtrado = $conn->query($sql_filtrar);

    if ($resultado_filtrado->num_rows > 0) {
        $output = '';
        while ($rowp = $resultado_filtrado->fetch_assoc()) {
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
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodusuario" data-idusu="' . $rowp['id_usu'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '<a href="#" class="btn btn-primary btn-activar" data-bs-toggle="modal" data-bs-target="#activarmodusuario" data-idusu="' . $rowp['id_usu'] . '"><i class="fa-solid fa-user-plus fa-fade" style="color: #e5ebf5;"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
            echo $output;
        }else{
            $output = '';
        while($rowp = $resultado_paginacion_usu->fetch_assoc()) {
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
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodusuario" data-idusu="' . $rowp['id_usu'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '<a href="#" class="btn btn-primary btn-activar" data-bs-toggle="modal" data-bs-target="#activarmodusuario" data-idusu="' . $rowp['id_usu'] . '"><i class="fa-solid fa-user-plus fa-fade" style="color: #e5ebf5;"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output; 
    }
}