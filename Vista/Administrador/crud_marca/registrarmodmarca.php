<body>
    <div class="modal fade" id="registrarmodmarca" tabindex="-1" aria-labelledby="registrarmodmarcaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrarmodmarcaLabel">Registrar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registrar_marca.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre_marca" id="nombre_marca" class="form-control border-primary" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Imagen</label>
                            <input type="file" name="img_marca" id="img_marca" class="form-control border-primary" required>
                        </div>
                        <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>