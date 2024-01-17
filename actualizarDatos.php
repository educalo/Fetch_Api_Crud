<?php
    include("conexion.php");
    /*recibimos los datos en formato post */

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $sql = "UPDATE tareas SET nombre='$nombre', descripcion= '$descripcion', fecha='$fecha' WHERE id=$id";
    
    mysqli_query($conn,$sql);
?>