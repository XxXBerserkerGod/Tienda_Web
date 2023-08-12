<?php
<<<<<<< HEAD
//consulta -------------------------------------FALTA TERMINAR
=======
//consulta 
>>>>>>> ModifiMoises
include("../../../Modelo/conexion.php");
$sql = "SELECT * 
FROM estado_producto";
$sql2 = "SELECT * 
FROM marca ";
$sql3 = "SELECT * 
FROM categoria ";
$sql4 = "SELECT * 
FROM talla ";
$sql5 = "SELECT * 
FROM color;";
$listar = $conn->query($sql);
$listar2 = $conn->query($sql2);
$listar3 = $conn->query($sql3);
$listar4 = $conn->query($sql4);
$listar5 = $conn->query($sql5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <title>Document</title>
=======
  <title>Editar Producto</title>
>>>>>>> ModifiMoises
</head>

<body>
  <div class="modal fade" id="editarmodprod" tabindex="-1" aria-labelledby="editarmodprodLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
<<<<<<< HEAD
          <h1 class="modal-title fs-5" id="editarmodprodLabel">Registrar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="editar_producto.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="mb-3">
                  <label for="nombre_producto" class="form-label">Producto</label>
                  <input type="text" name="nombre_producto" id="nombre_producto" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <input type="text" name="descripcion" id="descripcion" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="precio_producto" class="form-label">Precio</label>
                  <input type="text" name="precio_producto" id="precio_producto" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="stock" class="form-label">stock</label>
                  <input type="number" name="stock" id="stock" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="img_principal" class="form-label">Imagen Principal</label>
                  <input type="file" name="img_principal" id="img_principal" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="img_uno" class="form-label">Sub Imagen 1</label>
                  <input type="file" name="img_uno" id="img_uno" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="img_dos" class="form-label">Sub Imagen 2</label>
                  <input type="file" name="img_dos" id="img_dos" class="form-control border-primary" required>
=======
          <h5 class="modal-title" id="editarmodprodLabel">Editar Productox</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/Tienda_Web/Controller/Administrador/crud_producto/editar_producto.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="mb-3">
                  <input type="text" class="form-control" id="idprod_e" name="idprod_e" hidden>
                  <label class="form-label">Producto</label>
                  <input type="text" name="nombre_producto_e" id="nombre_producto_e" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Descripción</label>
                  <input type="text" name="descripcion_e" id="descripcion_e" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Precio</label>
                  <input type="text" name="precio_producto_e" id="precio_producto_e" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="stock_e" class="form-label">stock</label>
                  <input type="number" name="stock_e" id="stock_e" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                  <label for="img_principal_e" class="form-label">Imagen Principal</label>
                  <input type="file" name="img_principal_e" id="img_principal_e" class="form-control border-primary">
                </div>
                <div class="mb-3">
                  <label for="img_uno_e" class="form-label">Sub Imagen 1</label>
                  <input type="file" name="img_uno_e" id="img_uno_e" class="form-control border-primary">
                </div>
                <div class="mb-3">
                  <label for="img_dos_e" class="form-label">Sub Imagen 2</label>
                  <input type="file" name="img_dos_e" id="img_dos_e" class="form-control border-primary">
>>>>>>> ModifiMoises
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="mb-3">
<<<<<<< HEAD
                  <label for="codigo_estado" class="form-label">Estado</label>
                  <select id="codigo_estado" name="codigo_estado" class="form-select border-primary">
                    <?php while ($row = $listar->fetch_assoc()) {
                      if ($row["descripcion"] != "Inactivo") { ?>
                        <option value="<?php echo $row["codigo_estado"] ?>" name="codigo_estado"><?php echo $row["descripcion"]; ?></option>
=======
                  <label class="form-label">Estado</label>
                  <select id="codigo_estado_e" name="codigo_estado_e" class="form-select border-primary">
                    <?php while ($row = $listar->fetch_assoc()) {
                      if ($row["descripcion"] != "Inactivo") { ?>
                        <option value="<?php echo $row["codigo_estado"] ?>" name="codigo_estado_e"><?php echo $row["descripcion"]; ?></option>
>>>>>>> ModifiMoises
                    <?php }
                    }; ?>
                  </select>
                </div>

                <div class="mb-3">
<<<<<<< HEAD
                  <label for="id_marca" class="form-label">Marca</label>
                  <select id="id_marca" name="id_marca" class="form-select border-primary">
                    <?php while ($row2 = $listar2->fetch_assoc()) { ?>
                      <option value="<?php echo $row2["id_marca"]; ?>" name="id_marca"><?php echo $row2["nombre_marca"]; ?></option>
=======
                  <label class="form-label">Marca</label>
                  <select id="id_marca_e" name="id_marca_e" class="form-select border-primary">
                    <?php while ($row2 = $listar2->fetch_assoc()) { ?>
                      <option value="<?php echo $row2["id_marca"]; ?>" name="id_marca_e"><?php echo $row2["nombre_marca"]; ?></option>
>>>>>>> ModifiMoises
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
<<<<<<< HEAD
                  <label for="id_categoria" class="form-label">Categoria</label>
                  <select id="id_categoria" name="id_categoria" class="form-select border-primary">
                    <?php while ($row3 = $listar3->fetch_assoc()) { ?>
                      <option value="<?php echo $row3["id_categoria"]; ?>" name="id_categoria"><?php echo $row3["nombre_categoria"]; ?></option>
=======
                  <label class="form-label">Categoria</label>
                  <select id="id_categoria_e" name="id_categoria_e" class="form-select border-primary">
                    <?php while ($row3 = $listar3->fetch_assoc()) { ?>
                      <option value="<?php echo $row3["id_categoria"]; ?>" name="id_categoria_e"><?php echo $row3["nombre_categoria"]; ?></option>
>>>>>>> ModifiMoises
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
<<<<<<< HEAD
                  <label for="precio_oferta" class="form-label">Precio en Oferta(opc)</label>
                  <input type="text" name="precio_oferta" id="precio_oferta" class="form-control border-primary">
                </div>

                <div class="mb-3">
                  <label for="fecha_caducidad" class="form-label">Fecha de Caducidad(opc)</label>
                  <input type="date" name="fecha_caducidad" id="fecha_caducidad" class="form-control border-primary">
                </div>

                <div class="mb-3">
                  <label for="id_talla" class="form-label">Talla(opc)</label>
                  <select id="id_talla" name="id_talla" class="form-select border-primary">
                    <?php while ($row4 = $listar4->fetch_assoc()) { ?>
                      <option value="<?php echo $row4["id_talla"]; ?>" name="id_talla"><?php echo $row4["nombre_talla"]; ?></option>
=======
                  <label class="form-label">Precio en Oferta(opc)</label>
                  <input type="text" name="precio_oferta_e" id="precio_oferta_e" class="form-control border-primary">
                </div>

                <div class="mb-3">
                  <label class="form-label">Fecha de Caducidad(opc)</label>
                  <input type="date" name="fecha_caducidad_e" id="fecha_caducidad_e" class="form-control border-primary">
                </div>

                <div class="mb-3">
                  <label class="form-label">Talla(opc)</label>
                  <select id="id_talla_e" name="id_talla_e" class="form-select border-primary">
                    <?php while ($row4 = $listar4->fetch_assoc()) { ?>
                      <option value="<?php echo $row4["id_talla"]; ?>" name="id_talla_e"><?php echo $row4["nombre_talla"]; ?></option>
>>>>>>> ModifiMoises
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
<<<<<<< HEAD
                  <label for="id_color" class="form-label">Color(opc)</label>
                  <select id="id_color" name="id_color" class="form-select border-primary">
                    <?php while ($row5 = $listar5->fetch_assoc()) { ?>
                      <option value="<?php echo $row5["id_color"]; ?>" name="id_color"><?php echo $row5["nombre_color"]; ?></option>
=======
                  <label class="form-label">Color(opc)</label>
                  <select id="id_color_e" name="id_color_e" class="form-select border-primary">
                    <?php while ($row5 = $listar5->fetch_assoc()) { ?>
                      <option value="<?php echo $row5["id_color"]; ?>" name="id_color_e"><?php echo $row5["nombre_color"]; ?></option>
>>>>>>> ModifiMoises
                    <?php }; ?>
                  </select>
                </div>

                <input type="submit" class="btn btn-outline-primary" value="Guardar">
                <input type="button" class="btn btn-outline-secondary" value="Cancelar" data-bs-dismiss="modal">


              </div>

            </div>
          </form>
<<<<<<< HEAD
        </div>
      </div>
    </div>
</body>
=======




        </div>
      </div>

    </div>
  </div>

  <script>
    $('#editarmodprod').on('shown.bs.modal', function() {
      //referencia
      const estadoSelect2 = document.getElementById('codigo_estado_e');
      const categoriaSelect2 = document.getElementById('id_categoria_e');
      const tallaSelect2 = document.getElementById('id_talla_e');
      const fcaducidadselect2 = document.getElementById('fecha_caducidad_e');
      const colorselect2 = document.getElementById('id_color_e');
      const pofertaselect2 = document.getElementById('precio_oferta_e');

      //se ejectura al iniciar la carga del modal
      pofertaselect2.removeAttribute('disabled');
      colorselect2.removeAttribute('disabled');
      fcaducidadselect2.removeAttribute('disabled');
      tallaSelect2.removeAttribute('disabled');
      //Opciones seleccionadas al inicio
      const selectedCategoria2 = categoriaSelect2.options[categoriaSelect2.selectedIndex].text;
      console.log(selectedCategoria2);
      if (selectedCategoria2 == "Maquillaje") {
        tallaSelect2.setAttribute('disabled', 'true');

        colorselect2.setAttribute('required', 'true');
        fcaducidadselect2.setAttribute('required', 'true');
      } else if (selectedCategoria2 == "Perfume") {
        tallaSelect2.setAttribute('disabled', 'true');
        colorselect2.setAttribute('disabled', 'true');

        fcaducidadselect2.setAttribute('required', 'true');
      } else if (selectedCategoria2 == "Cuidado Personal") {
        tallaSelect2.setAttribute('disabled', 'true');
        colorselect2.setAttribute('disabled', 'true');

        fcaducidadselect2.setAttribute('required', 'true');
      } else if (selectedCategoria2 == "Ropa") {
        fcaducidadselect2.setAttribute('disabled', 'true');


        colorselect2.setAttribute('required', 'true');
        tallaSelect2.setAttribute('required', 'true');
      };

      
      const selectedOption2 = estadoSelect2.options[estadoSelect2.selectedIndex];
      if (selectedOption2) {
        const selectestado2 = selectedOption2.text;
        if (selectestado2 === "Oferta") {
          console.log("llegó oferta");
          pofertaselect2.setAttribute('required', 'true');
        } else {
          console.log("llegó a otro estado");
          pofertaselect2.setAttribute('disabled', 'true');
        }
      } else {
        console.log("No hay ninguna opción seleccionada");
        estadoSelect2.setAttribute('required', 'true');
        pofertaselect2.setAttribute('disabled', 'true');
      }



      //funciones para gestionar
      function gestionarOpcionesPorCategoria2() {
        const selectedCategoria2 = categoriaSelect2.options[categoriaSelect2.selectedIndex].text;
        tallaSelect2.removeAttribute('disabled');
        fcaducidadselect2.removeAttribute('disabled');
        colorselect2.removeAttribute('disabled');
        if (['Maquillaje'].includes(selectedCategoria2)) {
          tallaSelect2.setAttribute('disabled', 'true');

          colorselect2.setAttribute('required', 'true');
          fcaducidadselect2.setAttribute('required', 'true');
        } else if (['Perfume'].includes(selectedCategoria2)) {
          colorselect2.setAttribute('disabled', 'true');
          tallaSelect2.setAttribute('disabled', 'true');

          fcaducidadselect2.setAttribute('required', 'true');
        } else if (['Cuidado Personal'].includes(selectedCategoria2)) {
          colorselect2.setAttribute('disabled', 'true');
          tallaSelect2.setAttribute('disabled', 'true');

          fcaducidadselect2.setAttribute('required', 'true');
        } else if (['Ropa'].includes(selectedCategoria2)) {
          fcaducidadselect2.setAttribute('disabled', 'true');

          colorselect2.setAttribute('required', 'true');
          tallaSelect2.setAttribute('required', 'true');
        }
      }

      function gestionarEstado2() {
        const selectestado2 = estadoSelect2.options[estadoSelect2.selectedIndex].text;
        console.log(selectestado2);
        if (['Oferta'].includes(selectestado2)) {
          pofertaselect2.removeAttribute('disabled');
          pofertaselect2.setAttribute('required', 'true');
        } else {
          pofertaselect2.setAttribute('disabled', 'true');
        }
      }
      categoriaSelect2.addEventListener('change', gestionarOpcionesPorCategoria2);
      estadoSelect2.addEventListener('change', gestionarEstado2);
    });
  </script>

</body>

>>>>>>> ModifiMoises
</html>