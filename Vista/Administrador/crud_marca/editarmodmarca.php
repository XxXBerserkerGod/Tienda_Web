<body>
    <div class="modal fade" id="editarmodmarca" tabindex="-1" aria-labelledby="editarmodmarcaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarmodmarcaLabel">Eliminar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="editar_marca.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="idcat_e" name="idmarca_e" hidden>
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre_marca_e" id="nombre_marca_e" class="form-control border-primary" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen</label>
                            <input type="file" name="img_marca_e" id="img_marca_e" class="form-control border-primary" >
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>