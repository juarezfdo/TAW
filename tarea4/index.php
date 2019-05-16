<!DOCTYPE html>
<html>
<head>
	<?php 
		//Llamado de clase usuarios para el ejercicio 1
		include_once "clases/usuarios.php";
		//Instanciar un objeto de la clase
		$usuario = new Usuario();
	 ?>
	<title>Ejercicio 1</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php 
			#Incluir la barra de navegación
			include_once "navegacion.php";
		 ?>
		 <h1 align="center">CONTANDO DATOS</h1>
		 <hr>
		 <h3>DATOS GENERALES</h3>
		 <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Usuarios</th>
			      <th scope="col">Tipos</th>
			      <th scope="col">Status</th>
			      <th scope="col">Accesos</th>
			      <th scope="col">Usuarios Activos</th>
			      <th scope="col">Usuarios Inactivos</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
			    	$usuario->mostrarTablaPrincipal();
			     ?>
			  </tbody>
		</table>
		<br>
		<h3>TABLAS ORIGINALES</h3>
		<hr>
		<div class="row">
			<div class="col-8">
				<h5>User</h5>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>email</th>
							<th>pssw</th>
							<th>status_id</th>
							<th>user_type_id</th>
						</tr>
					</thead>
					<tbody>
						<?php $usuario->tablaUser(); ?>
					</tbody>
				</table>
			</div>
			<div class="col-4">
				<h5>User_log</h5>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>date_logged</th>
							<th>user_id</th>
						</tr>
					</thead>
					<tbody>
						<?php $usuario->tablaUser_log(); ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h5>User_type</h5>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
						</tr>
					</thead>
					<tbody>
						<?php $usuario->tablaUser_type(); ?>
					</tbody>
				</table>
			</div>
			<div class="col-3">
				<h5>Status</h5>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
						</tr>
					</thead>
					<tbody>
						<?php $usuario->tablaStatus(); ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>