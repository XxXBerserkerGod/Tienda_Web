<body>
    <div class="modal fade" id="eliminarmodmarca" tabindex="-1" aria-labelledby="eliminarmodmarcaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarmodmarcaLabel">Eliminar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/Tienda_Web/Controller/Administrador/crud_marca/eliminar_marca.php" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" id="idmarca" name="idmarca" hidden>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>