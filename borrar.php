<?php
    include("conexion.php");
    /*recibimos los datos en formato post */

    $id =$_POST['id'];

    $sql ="DELETE FROM tareas WHERE id=$id";
    mysqli_query($conn,$sql);
?>