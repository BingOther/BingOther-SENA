<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM evento_bingo where id_bingo=$id";
        $resultado=mysqli_query($conn, $query);
        if(!$resultado){
            die ("Error al borrar evento");
        }

        $_SESSION['message']='El evento se borro correctamente';
        $_SESSION['message_type']='danger';
        header("Location: evento.php");
    }
?>