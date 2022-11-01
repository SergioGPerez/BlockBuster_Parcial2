<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 100% oficial - BlockBuster</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre del producto:</label>
                        <input type="text" class="form-control" name="nombre_producto" placeholder="Tecle el nombre de su producto">
                    </div>

                    <div class="form-group">
                        <label for="">Tipo de producto:</label>
                        <input type="text" class="form-control" name="tipo_producto" placeholder="Tecle el tipo de su producto">
                    </div>

                    <div class="form-group">
                        <label for="">Nombre del cliente:</label>
                        <input type="text" class="form-control" name="nombre_producto" placeholder="Tecle el nombre del cliente que lo compro">
                    </div>
                    <div class="form-group">
                        <label for="">Domicilio del cliente:</label>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de renta/compra:</label>
                        <input type="date" class="form-control" name="fecha_renta/compra">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; BlockBusterOFFICIAL
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
