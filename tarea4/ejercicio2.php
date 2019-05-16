<!DOCTYPE html>
<html>
<head>
	<?php 
		//Llamado de clase jugadores para el ejercicio 2
		include_once "clases/jugadores.php";
		//Instanciar un objeto de la clase
		$jugador = new Jugador();
	 ?>
	<title>Ejercicio 2</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php 
			#Incluir la barra de navegación
			include_once "navegacion.php";
		?>
		<h1 align="center">REGISTRO DE JUGADORES</h1>
		<hr>
		<ul class="nav nav-tabs">
		  <li class="active nav-item"><a class="nav-link" data-toggle="tab" href="#Futbolistas">Futbolistas</a></li>
		  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Basquetbolistas"> Basquetbolistas</a></li>
		</ul>

		<div class="tab-content">
		  <div id="Futbolistas" class="tab-pane fade in active">
		  	<br>
		    <div class="row">
	            <div class="col-lg-10">
	                <h2>FUTBOLISTAS REGISTRADOS</h2>
	            </div>
	            <div class="col-lg-2">
	                <a href="futbol/create.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> Registrar</a>
	            </div>
	        </div>
		    <table id="futbol" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Carrera</th>
                <th>Email</th>
                <th>Acciónes</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            	$jugador->mostrarFutbolistas();
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Carrera</th>
                <th>Email</th>
                <th>Acciónes</th>
            </tr>
        </tfoot>
    </table>
		  </div>
		  <div id="Basquetbolistas" class="tab-pane fade">
		  	<br>
		    <div class="row">
	            <div class="col-lg-10">
	                <h2>BASQUETBOLISTAS REGISTRADOS</h2>
	            </div>
	            <div class="col-lg-2">
	                <a href="basquetbol/create.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> Registrar</a>
	            </div>
	        </div>
		    <table id="basquetbol" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Carrera</th>
                <th>Email</th>
                <th>Acciónes</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            	$jugador->mostrarBasquetbolista();
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Carrera</th>
                <th>Email</th>
                <th>Acciónes</th>
            </tr>
        </tfoot>
    </table>
		  </div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script>	
		$(document).ready(function() {
		    $('#futbol').DataTable();
		} );
		$(document).ready(function() {
		    $('#basquetbol').DataTable();
		} );
	</script>
</body>
</html>