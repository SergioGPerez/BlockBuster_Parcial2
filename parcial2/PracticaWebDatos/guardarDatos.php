<?php

    include 'conexion.php';

    $nombreProducto = $_POST["nombre_producto"];
    $tipoProducto= $_POST["tipo_producto"];
    $nombreCliente = $_POST["nombre_cliente"];
    $domicilio = $_POST["domicilio"];
    $fecha_rentacompra = $_POST["fecha_rentacompra"];

    $sql = "INSERT INTO usuariosBlockBuster (nombre_producto, tipo_producto, nombre_cliente, domicilio, fecha_rentacompra)". "VALUES ('".$nombreProducto."', ".$tipoProducto.", ".$nombreCliente.", '".$domicilio."', '".$fecha_rentacompra."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
