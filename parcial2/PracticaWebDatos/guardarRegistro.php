<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombreProducto = $_POST["nombre_producto"];
    $tipoProducto = $_POST["tipo_producto"];
    $nombreCliente = $_POST["nombre_cliente"];
    $domicilio = $_POST["domicilio"];
    $fecha_rentacompra = $_POST["fecha_rentacompra"];

    $sql = "UPDATE usuariosBlockBuster SET nombre_producto='".$nombreProducto."' , tipo_producto= ".$tipoProducto.",". 
    "nombre_cliente = '".$nombreCliente."', domicilio = '".$domicilio."', fecha_rentacompra ='".$fecha_rentacompra."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>