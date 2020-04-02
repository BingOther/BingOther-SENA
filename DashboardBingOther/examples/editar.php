<?php

include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM insumos WHERE id_insumos = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_insumo = $row['nombre_insumo'];
        $cantidad = $row['cantidad'];
        $estado = $row['estado'];
    }
}

if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $nombre_insumo = $_POST['nombre_insumo'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];

    $query = "UPDATE insumos set nombre_insumo = '$nombre_insumo', cantidad = '$cantidad', estado = '$estado' WHERE id_insumos = $id";
    $result = mysqli_query($conn, $query);
    
    header("Location: insumo.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/4da356debb.js" crossorigin="anonymous"></script>
</head>
    <body>

    <nav class="navbar nav-dark bg-dark">
        <div class="container">
            <a href="insumo.php" class="navbar-brand">Editar insumo</a>
        </div>    
    </nav>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_insumo" value="<?php echo $nombre_insumo; ?>" class="form-control" placeholder="Actualiza el nombre del insumo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="estado" value="<?php echo $estado; ?>" class="form-control" placeholder="Actualiza el estado del insumo">
                    </div>
                    <div class="form-group">
                    <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" class="form-control" min="0" max="100" id="inputNumber4">
                    </div>
                    <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- Scripts --> 

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    </body>
</html>