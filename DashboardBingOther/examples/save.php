<?php
    include("db.php");

    if(isset($_POST['save']))
    {
        $lugar=$_POST['lugar'];
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];

        $query="INSERT INTO evento_bingo(lugar, fecha, hora) VALUES ('$lugar', '$fecha', '$hora')";
        $result=mysqli_query($conn, $query);
        if(!$result)
        {
            die("query fallo");
        }

        $_SESSION['message']='El evento se guardo correctamente';
        $_SESSION['message_type']='success';

        header("Location: evento.php");  
    }
?>