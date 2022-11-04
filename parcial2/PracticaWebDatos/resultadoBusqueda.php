<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>búsqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';

    ?>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">La pagina que usted buscó no se encuentra en nuestra base de datos</div><br><br>
        <a href="consultarDatos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from usuarios WHERE nombre LIKE '%" . $_GET["termino"] . "%'";
        $usuarios = $conexion->query($sql);
        if($usuarios->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
        } else {
    ?>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Tipo del producto</th>
                <th>Nombre del cliente</th>
                <th>Domicilio</th>
                <th>Fecha de renta/compra</th>
            </thead>
            <tbody>
                <?php while($row = $usuarios->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre_producto"]; ?></td>
                        <td><?php echo $row["tipo_producto"]; ?></td>
                        <td><?php echo $row["nombre_cliente"]; ?></td>
                        <td><?php echo $row["domicilio"]; ?></td>
                        <td><?php echo $row["fecha_renta/compra"]; ?></td>
                        <td>
                            <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } } ?>
                </div></div></div>
    <script src="js/bootstrap.js"></script>
</body>
</html>
