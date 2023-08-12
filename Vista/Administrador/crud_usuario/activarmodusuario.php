<body>
    <div class="modal fade" id="activarmodusuario" tabindex="-1" aria-labelledby="activarmodusuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activarmodusuarioLabel">Activar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/Tienda_Web/Controller/Administrador/crud_usuario/activar_usuario.php" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" id="idusu" name="idusu" hidden>
                        <button type="submit" class="btn btn-primary">Habilitar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>