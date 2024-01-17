<?php
    include("conexion.php");
    /*recibimos los datos en formato post */

    $nombre =$_POST['nombre'];
    $descripcion =$_POST['descripcion'];
    $fecha =$_POST['fecha'];

    $sql ="INSERT INTO tareas(nombre, descripcion, fecha) VALUES ('$nombre', '$descripcion', '$fecha')";
    mysqli_query($conn,$sql);
?>