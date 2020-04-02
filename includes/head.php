<!DOCTYPE html>
<html>
<head>
	<title>BingOther</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<script src="https://kit.fontawesome.com/4da356debb.js" crossorigin="anonymous"></script>

	<!-- Favicon -->

	<link rel="icon" href="icono1.ico" type="'image/x-icon'/">

</head>
<body>

	<header id="Inicio">

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

			  <img class="logo" src="img/BingOther logo.png">

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link espacio" href="#Inicio">Inicio</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link espacio" href="#Nosotros">Sobre nosotros... </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link espacio" href="#Eventos">Eventos</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link espacio" href="#Contacto">Contacto</a>
			      </li>
			    </ul>
			    <!-- Button trigger modal -->

			     <div class="button-modal">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Login">
				  Iniciar sesión
				</button>
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Register">
				  Registrarse
				</button>
				</div>
			  </div>
			</nav>

			<!-- Modal 1 -->
			<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Correo electrónico</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					    <small id="emailHelp" class="form-text text-muted">No compartiremos tu información con nadie.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Contraseña</label>
					    <input type="password" class="form-control" id="exampleInputPassword1">
					  </div>
					  <div class="form-group form-check">
					  </div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-warning">Iniciar sesión</button>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Modal 2 -->
			<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					<form>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Nombre</label>
					      <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese su nombre">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Apellido</label>
					      <input type="text" class="form-control" id="inputAd" placeholder="Ingrese su apellido">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Fecha de nacimiento</label>
					    <input type="date" class="form-control" id="inputAddress" placeholder="Ingrese nombres">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Correo electrónico</label>
					    <input type="email" class="form-control" id="emailregister" placeholder="Ingrese nombres">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Contraseña</label>
					    <input type="password" class="form-control" id="passwordregister1" placeholder="Ingrese nombres">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Confirmar contraseña</label>
					    <input type="password" class="form-control" id="passwordregister2" placeholder="Ingrese nombres">
					  </div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-warning">Registrar</button>
			      </div>
			    </div>
			  </div>
			</div>