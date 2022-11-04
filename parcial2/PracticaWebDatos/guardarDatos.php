<?php

    include 'conexion.php';

    $nombreProducto = $_POST["nombre_producto"];
    $tipoProducto= $_POST["tipo_producto"];
    $nombreCliente = $_POST["nombre_cliente"];
    $domicilio = $_POST["domicilio"];
    $fecha_rentacompra = $_POST["fecha_renta/compra"];

    $sql = "INSERT INTO usuariosBlockBuster (nombre_cliente, tipo_producto, nombre_cliente, domicilio, fecha_renta/compra)". 
    "VALUES ('".$nombreProducto."', ".$tipoProducto.", ".$nombreCliente.", '".$domicilio."', '".$fecha_rentacompra."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
