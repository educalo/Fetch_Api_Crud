<?php
    include("conexion.php");

    $sql ="select id, nombre, descripcion, fecha from tareas";

    $resultado = mysqli_query($conn, $sql);

    $data = array();

    //Devuelve una matriz asociativa que corresponde a la fila recuperada y mueve el apuntador de datos interno hacia adelante
    while ($fila = mysqli_fetch_assoc($resultado)){
        $data [] = $fila;
    }

    //La función json_encode() se utiliza para codificar un valor en formato JSON
    echo json_encode($data);

?>