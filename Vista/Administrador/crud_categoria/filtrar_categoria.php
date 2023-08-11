<?php
include("../../../Modelo/conexion.php");
include('./paginacion_categoria.php');
if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    
    $sql_filtrar = "SELECT *
    from categoria
    WHERE nombre_categoria LIKE '$filtro%'";
    $resultado_filtrado = $conn->query($sql_filtrar);

    if ($resultado_filtrado->num_rows > 0) {
        $output = '';
        while ($rowp = $resultado_filtrado->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_categoria'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_categoria'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_catg"] . '" alt="img categoria" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['estado_categoria'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodcategoria" data-idcat="' . $rowp['id_categoria'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodcategoria" data-idcat="' . $rowp['id_categoria'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }
        echo $output;
    } else {
        $output = ''; 
        while ($rowp = $resultado_paginacion_cat->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="text-center">' . $rowp['id_categoria'] . '</td>';
            $output .= '<td class="text-center">' . $rowp['nombre_categoria'] . '</td>';
            $output .= '<td class="text-center"><img src="' . $rowp["img_catg"] . '" alt="img categoria" style="width: 70px; height: 70px;"></td>';
            $output .= '<td class="text-center">' . $rowp['estado_categoria'] . '</td>';
            $output .= '<td class="text-center">';
            $output .= '<a href="#" class="btn btn-warning btn-editar" data-bs-toggle="modal" data-bs-target="#editarmodcategoria" data-idcat="' . $rowp['id_categoria'] . '"> <i class="fa-solid fa-pen-to-square"></i></a>';
            $output .= '<a href="#" class="btn btn-danger btn-eliminar" data-bs-toggle="modal" data-bs-target="#eliminarmodcategoria" data-idcat="' . $rowp['id_categoria'] . '"><i class="fa-solid fa-trash"></i></a>';
            $output .= '</td>';
            $output .= '</tr>';
        }

        echo $output;    
    }
}
