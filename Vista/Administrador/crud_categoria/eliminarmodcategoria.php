<body>
    <div class="modal fade" id="eliminarmodcategoria" tabindex="-1" aria-labelledby="eliminarmodcategoriaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarmodcategoriaLabel">Eliminar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/Tienda_Web/Controller/Administrador/crud_categoria/eliminar_categoria.php" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" id="idcat" name="idcat" hidden>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>