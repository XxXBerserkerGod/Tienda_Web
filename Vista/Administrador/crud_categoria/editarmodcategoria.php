<body>
    <div class="modal fade" id="editarmodcategoria" tabindex="-1" aria-labelledby="editarmodcategoriaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarmodcategoriaLabel">Eliminar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="editar_categoria.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="idcat_e" name="idcat_e" hidden>
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre_categoria_e" id="nombre_categoria_e" class="form-control border-primary" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen</label>
                            <input type="file" name="img_catg_e" id="img_catg_e" class="form-control border-primary" >
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