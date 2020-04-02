<?php 

include('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM insumos WHERE id_insumos = $id";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Consulta fallida");
    }

    header("Location: insumo.php");
}

?>