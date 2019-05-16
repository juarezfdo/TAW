<!DOCTYPE html>
<html>
<head>
	<?php 
		//Llamado de clase jugadores para el ejercicio 2
		include_once "../clases/jugadores.php";
		//Instanciar un objeto de la clase
		$jugador = new Jugador();
	 ?>
	<title>Registrar Basquetbolista</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
            <div class="col-lg-10">
                <h2>REGISTRO DE BASQUETBOLISTA</h2>
            </div>
            <div class="col-lg-2">
                <a href="../ejercicio2.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
            </div>
        </div>
		<hr>
		<?php  $jugador->formularioRegistrarBasquetbolista();
			if (isset($_POST["Guardar"])) {
                $jugador->registrarBasquetbolista();
            }
		?>
	</div>
</body>
</html>