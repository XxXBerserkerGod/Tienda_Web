<?php
//consulta 
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
  <title>Document</title>
</head>

<body>
  <div class="modal fade" id="registrarmod" tabindex="-1" aria-labelledby="registrarmodLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="registrarmodLabel">Registrar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="guardar_producto.php" method="post" enctype="multipart/form-data">
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
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="mb-3">
                  <label for="codigo_estado" class="form-label">Estado</label>
                  <select id="codigo_estado" name="codigo_estado" class="form-select border-primary">
                    <?php while ($row = $listar->fetch_assoc()) {
                      if ($row["descripcion"] != "Inactivo") { ?>
                        <option value="<?php echo $row["codigo_estado"] ?>" name="codigo_estado"><?php echo $row["descripcion"]; ?></option>
                    <?php }
                    }; ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="id_marca" class="form-label">Marca</label>
                  <select id="id_marca" name="id_marca" class="form-select border-primary">
                    <?php while ($row2 = $listar2->fetch_assoc()) { ?>
                      <option value="<?php echo $row2["id_marca"]; ?>" name="id_marca"><?php echo $row2["nombre_marca"]; ?></option>
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="id_categoria" class="form-label">Categoria</label>
                  <select id="id_categoria" name="id_categoria" class="form-select border-primary">
                    <?php while ($row3 = $listar3->fetch_assoc()) { ?>
                      <option value="<?php echo $row3["id_categoria"]; ?>" name="id_categoria"><?php echo $row3["nombre_categoria"]; ?></option>
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
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
                    <?php }; ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="id_color" class="form-label">Color(opc)</label>
                  <select id="id_color" name="id_color" class="form-select border-primary">
                    <?php while ($row5 = $listar5->fetch_assoc()) { ?>
                      <option value="<?php echo $row5["id_color"]; ?>" name="id_color"><?php echo $row5["nombre_color"]; ?></option>
                    <?php }; ?>
                  </select>
                </div>

                <input type="submit" class="btn btn-outline-primary" value="Guardar">
                <input type="button" class="btn btn-outline-secondary" value="Cancelar" data-bs-dismiss="modal">


              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      const estadoSelect = document.getElementById('codigo_estado');
      const categoriaSelect = document.getElementById('id_categoria');

      const tallaSelect = document.getElementById('id_talla');
      const fcaducidadselect = document.getElementById('fecha_caducidad');
      const colorselect = document.getElementById('id_color');
      const pofertaselect = document.getElementById('precio_oferta');

      //se ejectura al iniciar la carga del modal
      pofertaselect.removeAttribute('disabled');
      tallaSelect.setAttribute('disabled', 'true');
      colorselect.removeAttribute('disabled');
      fcaducidadselect.removeAttribute('disabled');
      pofertaselect.setAttribute('required', 'true');

      //funciones para gestionar
      function gestionarOpcionesPorCategoria() {
        const selectedCategoria = categoriaSelect.options[categoriaSelect.selectedIndex].text;
        tallaSelect.removeAttribute('disabled');
        fcaducidadselect.removeAttribute('disabled');
        colorselect.removeAttribute('disabled');
        if (['Maquillaje'].includes(selectedCategoria)) {
          tallaSelect.setAttribute('disabled', 'true');
          fcaducidadselect.setAttribute('required', 'true');
        } else if (['Perfume'].includes(selectedCategoria)) {
          colorselect.setAttribute('disabled', 'true');
          tallaSelect.setAttribute('disabled', 'true');
          fcaducidadselect.setAttribute('required', 'true');
        } else if (['Cuidado Personal'].includes(selectedCategoria)) {
          fcaducidadselect.value = "";
          colorselect.setAttribute('disabled', 'true');
          tallaSelect.setAttribute('disabled', 'true');
          fcaducidadselect.setAttribute('disabled', 'true');
        } else if (['Ropa'].includes(selectedCategoria)) {
          fcaducidadselect.value = "";
          fcaducidadselect.setAttribute('disabled', 'true');
        }
      }

      function gestionarEstado() {
        const selectestado = estadoSelect.options[estadoSelect.selectedIndex].text;
        if (['Oferta'].includes(selectestado)) {
          pofertaselect.removeAttribute('disabled');
          pofertaselect.setAttribute('required', 'true');

        } else {
          pofertaselect.value = "";
          pofertaselect.setAttribute('disabled', 'true');
        }
      }
      categoriaSelect.addEventListener('change', gestionarOpcionesPorCategoria);
      estadoSelect.addEventListener('change', gestionarEstado);
    </script>


</body>

</html>