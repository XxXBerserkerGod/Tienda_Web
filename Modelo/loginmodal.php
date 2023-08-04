<div class="modal fade" id="login_Modal" tabindex="-1" aria-labelledby="login_ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="login_ModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="form-floating mb-4">
                        <input type="text" name="user" class="form-control form-control-lg" placeholder="Usuario">
                        <label class="text-dark">Usuario</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña">
                        <label class="text-dark">Contraseña</label>
                    </div>

                    <p class="small mb-5 pb-lg-2">
                        <a href="#" class="text-white-50">
                            ¿Has olvidado la contraseña?
                        </a>
                    </p>
                    <button type="submit" class="btn btn-outline-light btn-lg px-5">Ingresar </button>
                </form>
            </div>
        </div>
    </div>
</div>