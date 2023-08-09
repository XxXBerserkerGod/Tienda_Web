<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="eliminarmodprod" tabindex="-1" aria-labelledby="eliminarmodprodLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarmodprodLabel">Eliminar Productox</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="eliminarprod.php" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" id="idprod" name="idprod" hidden>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>