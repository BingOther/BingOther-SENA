<?php

include('db.php');

if (isset($_POST['agregar_insumo'])){
    $nombre_insumo = $_POST['nombre_insumo'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO insumos(nombre_insumo, cantidad, estado) VALUES ('$nombre_insumo', '$cantidad', '$estado')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Consulta fallida");
    }

    header("Location: insumo.php");
}

?>