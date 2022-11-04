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
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuariosBlockBuster WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre del producto:</label>
                        <input value="<?php echo $registro["nombre_producto"]; ?>" type="text" class="form-control" name="nombre_producto" placeholder="Teclea el nombre del producto">
                    </div>

                    <div class="form-group">
                        <label for="">Tipo del producto:</label>
                        <input value="<?php echo $registro["tipo_producto"]; ?>" type="text" class="form-control" name="tipo_producto" placeholder="Teclea el tipo del producto">
                    </div>

                    <div class="form-group">
                        <label for="">Nombre del cliente:</label>
                        <input value="<?php echo $registro["nombre_cliente"]; ?>" type="text" class="form-control" name="nombre_cliente" placeholder="Teclea el nombre del cliente">
                    </div>

                    <div class="form-group">
                        <label for="">Domicilio del cliente:</label>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"><?php echo $registro["domicilio"] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de renta/compra:</label>
                        <input value="<?php echo $registro["fecha_renta/compra"]; ?>" type="date" class="form-control" name="fecha_nacimiento">
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
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>

