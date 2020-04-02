<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="SELECT * FROM evento_bingo WHERE id_bingo=$id";
        $resultado=mysqli_query($conn, $query);

        if(mysqli_num_rows($resultado) == 1){
            $row=mysqli_fetch_array($resultado);
            $lugar=$row['lugar'];
            $fecha=$row['fecha'];
            $hora=$row['hora'];
            $estado=$row['estado'];
        }
    }

    if(isset($_POST['edit'])){
        $id=$_GET['id'];
        $lugar=$_POST['lugar'];
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $estado=$_POST['estado'];

        $query="UPDATE evento_bingo SET lugar='$lugar', fecha='$fecha', hora='$hora', estado='$estado' 
        WHERE id_bingo=$id";
        mysqli_query($conn, $query);
        $_SESSION['message']='El evento se actulizo correctamente';
        $_SESSION['message_type']='primary';
        header("Location: evento.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BingOther 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <link href="../assets/css/estilo.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#">
          <img class="avatar border-gray fPerfil" src="../assets/img/mike.jpg" alt="..." style="border-radius: 100%">
          <h5 style="color: white" class="nombreAdmi">Juan Ramirez</h5>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.html">
              <i class="fas fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li>
            <a href="./evento.php">
              <i class="fas fa-calendar-alt"></i>
              <p>Gestion evento</p>
            </a>
          </li>
          <li>
            <a href="./Insumo.html">
              <i class="fas fa-tv"></i>
              <p>Gestion insumo</p>
            </a>
          </li>
          <li>
            <a href="./Usuario.html">
              <i class="far fa-user"></i>
              <p>Gestion usuario</p>
            </a>
          </li>
          <li>
            <a href="./Juego.html">
              <i class="fas fa-gamepad"></i>
              <p>Gestion juego</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-adjust"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Opciones</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Cerrar sesion</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="panel-header panel-header-sm">
      </div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method='POST'>
                        <div class="form-group">
                            <input type="text" name='lugar' value="<?php echo $lugar; ?>"
                            class="form-control" placeholder="Ingresa nuevo lugar">
                        </div>
                        <div class="form-group">
                            <input type="date" name='fecha' value="<?php echo $fecha; ?>"
                            class="form-control" placeholder="Ingresa nueva fecha">
                        </div>
                        <div class="form-group">
                            <input type="time" name='hora' value="<?php echo $hora; ?>"
                            class="form-control" placeholder="Ingresa nueva hora">
                        </div>
                        <div class="form-group">
                            <input type="text" name='estado' value="<?php echo $estado; ?>"
                            class="form-control" placeholder="Ingresa nuevo estado">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="edit" value="Guardar"  style="background: blue;">
                        <a href="evento.php" class="btn btn-secondary btn-block">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>