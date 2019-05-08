<?php 
	//Incluir la clase
	include "persona.php";
	//Instanciar la clase
	$persona = new persona();
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Calculadora IMC</title>
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-6">
				<h3 align="center">Calculadora de IMC</h3>
				<?php $persona->crearFormulario(); ?>
				<?php 
				if (isset($_POST["calcular"])) {
					$persona->insertar();
				}
				 ?>
				 <br>
			</div>
			<div class="col-6">
				<h3 align="center">Resultados obtenidos</h3>
				<?php $persona->mostrar(); ?>
			</div>		
		</div>
	</div>
	
</body>
</html>