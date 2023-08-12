<?php
include("../../../Modelo/conexion.php");
include('./paginacion_marca.php');
if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    
    $sql_filtrar = "SELECT *
    from marca
    WHERE nombre_marca LIKE '$filtro%'";
    $resultado_filtrado = $conn->query($sql_filtrar);
    if ($resultado_filtrado->num_rows > 0) {
        $output = '';
        while ($rowp = $resultado_filtrado->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_marca'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_marca'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_marca"] . '" alt="img categoria" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['estado_marca'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodmarca" data-idmarca="' . $rowp['id_marca'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodmarca" data-idmarca="' . $rowp['id_marca'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output;
    } else {
        $output = ''; 
        while ($rowp = $resultado_paginacion_marca->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_marca'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_marca'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_marca"] . '" alt="img categoria" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['estado_marca'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodmarca" data-idmarca="' . $rowp['id_marca'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodmarca" data-idmarca="' . $rowp['id_marca'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }

        echo $output;    
    }
}
