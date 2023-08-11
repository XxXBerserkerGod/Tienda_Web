<?php
include("../../../Modelo/conexion.php");
include('./paginacion_producto.php');
if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    
    $sql_filtrar = "SELECT *, p.descripcion as desc_prod, ep.descripcion as n_estado 
    FROM producto p 
    INNER JOIN estado_producto ep ON p.codigo_estado = ep.codigo_estado
    WHERE p.id_producto = '$filtro'";
    
    $resultado_filtrado = $conn->query($sql_filtrar);

    if ($resultado_filtrado->num_rows > 0) {
        $output = '';
        while ($rowp = $resultado_filtrado->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_producto'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_producto'] . '</td>';
            $output .= '<td class="text-center">' . substr($rowp['desc_prod'], 0, 20) . '</td>';
            $output .= '<td class="text-center">' . $rowp['precio_producto'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['stock'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_principal"] . '" alt="img Principal" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_uno"] . '" alt="img Sub 1" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_dos"] . '" alt="img Sub 2" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['n_estado'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_marca'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_categoria'] . '</td>';
            $output .= '<td class="text-center">' . (($rowp['precio_oferta'] !== null) ? $rowp['precio_oferta'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['fecha_caducidad'] !== null) ? $rowp['fecha_caducidad'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['id_talla'] !== null) ? $rowp['id_talla'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['id_color'] !== null) ? $rowp['id_color'] : "---") . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodprod" data-idprod="' . $rowp['id_producto'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodprod" data-idprod="' . $rowp['id_producto'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output;
    } else {
        $output = ''; 
        while ($rowp = $resultado_paginacion->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_producto'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_producto'] . '</td>';
            $output .= '<td class="text-center">' . substr($rowp['desc_prod'], 0, 20) . '</td>';
            $output .= '<td class="text-center">' . $rowp['precio_producto'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['stock'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_principal"] . '" alt="img Principal" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_uno"] . '" alt="img Sub 1" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_dos"] . '" alt="img Sub 2" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['n_estado'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_marca'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['id_categoria'] . '</td>';
            $output .= '<td class="text-center">' . (($rowp['precio_oferta'] !== null) ? $rowp['precio_oferta'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['fecha_caducidad'] !== null) ? $rowp['fecha_caducidad'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['id_talla'] !== null) ? $rowp['id_talla'] : "---") . '</td>';
            $output .= '<td class="text-center">' . (($rowp['id_color'] !== null) ? $rowp['id_color'] : "---") . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodprod" data-idprod="' . $rowp['id_producto'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodprod" data-idprod="' . $rowp['id_producto'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }

        echo $output;    }
}
