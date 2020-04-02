<?php
    include('db.php');
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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/estilo.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
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
        <a href="">
          <img class="avatar border-gray fPerfil" style="border-radius: 100%" src="../assets/img/mike.jpg" alt="...">
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
            <a href="./Insumo.php">
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
                  <a class="dropdown-item" href="../../index.html">Cerrar sesion</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Eventos</h4>
              </div>
              <?php
				            if(isset($_SESSION['message'])){
				        ?>
				            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
				            <?= $_SESSION['message'] ?>
				                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                    <span aria-hidden="true">&times;</span>
				                </button>
				            </div>
				        <?php
				            session_unset(); 
				            }
				        ?>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" style="background: blue; margin-left: 5em;"
                data-toggle="modal" data-target="#staticBackdrop">
                Agregar evento
              </button>

              <button type="button" class="btn btn-primary" style="background: blue; margin-left: 5em;"
                data-toggle="modal">
                Generar reporte
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="padding: 2em;">
                    	
				            <form action="save.php" method="POST">
				                <div class="form-group">
				                    <label for="">Lugar</label>
				                    <input type="text" name="lugar" class="form-control" placeholder="Ingrese lugar" autofocus>
				                </div>
				                <div class="form-group">
				                    <label for="">Fecha</label>
				                    <input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha" autofocus>
				                </div>
				                <div class="form-group">
				                    <label for="">Hora</label>
				                    <input type="time" name="hora" class="form-control" placeholder="Ingrese hora" autofocus>
				                </div>
				                <input type="submit" class="btn btn-primary btn-block" name="save" value="Guardar" style="background: blue;">
				                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>
				            </form>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-bordered">
	                <thead>
	                    <th>ID</th>
	                    <th>Lugar</th>
	                    <th>Fecha</th>
	                    <th>Hora</th>
	                    <th>Estado</th>
	                    <th>Opciones</th>
	                </thead>
	                <tbody>
	                    <?php
	                        $query="SELECT id_bingo, lugar, fecha, hora, estado FROM evento_bingo";
	                        $resultado_evento=mysqli_query($conn, $query);

	                        while($row=mysqli_fetch_array($resultado_evento)){?>
	                            <tr>
	                                <td><?php echo $row['id_bingo']?></td>
	                                <td><?php echo $row['lugar']?></td>
	                                <td><?php echo $row['fecha']?></td>
	                                <td><?php echo $row['hora']?></td>
	                                <td><?php echo $row['estado']?></td>
	                                <td> 
	                                    <a href="edit.php?id=<?php echo $row['id_bingo']?>" class="btn btn-primary">
	                                        <i class="far fa-edit"></i>
	                                    </a>
	                                    <a href="delete.php?id=<?php echo $row['id_bingo']?>" class="btn btn-danger">
	                                    <i class="far fa-trash-alt"></i>
	                                    </a>
	                                </td>
	                            </tr>
	                        <?php } ?>
	                </tbody>
	             </table>
                </div>
              </div>
            </div>
          </div>

          <!--   Core JS Files   -->
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
</body>

</html>

