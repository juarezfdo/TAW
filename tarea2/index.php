<?php 
	//Conexion a la Base de Datos
	

	/**
	 * 	Clase para controlar los alumnos
	 */
	class alumno
	{
		public $matricula="";
		public $nombre="";
		public $carrera="";
		public $email="";
		public $telefono="";

		function crearFormulario(){
			?>

			<h3 align="center">Registro de Alumno</h3>
			<form method="POST"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="matricula">Matricula</label>
							<input class="form-control" type="text" name="matricula" id="matricula"required>
						</div>
						<div class="col-6">
							<label for="carrera">Carrera</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required>						
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="email">Correo Electrónico</label>
							<input class="form-control" type="email" name="email" id="email"required>
						</div>
						<div class="col-6">
							<label for="telefono">Teléfono</label>
							<input class="form-control" type="text" name="telefono" id="telefono"required>						
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submitAlumno">Guardar</button>
			</form>

			<?php 
		}

		function insertar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "taw";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			if (isset($_POST["submitAlumno"])) {
				$matricula = $_POST['matricula'];
				$nombre = $_POST["nombre"];
				$carrera = $_POST["carrera"];
				$email = $_POST["email"];
				$telefono = $_POST["telefono"];
			}
			$sql = "INSERT INTO alumno (matricula,nombre,carrera,email,telefono) VALUES ('{$matricula}','{$nombre}','{$carrera}','{$email}','{$telefono}'); ";
			if($conn->query($sql) === TRUE){
				
			}else{
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		function mostrar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "taw";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT nombre,matricula,carrera,email,telefono FROM alumno";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo $row["nombre"]. " -" . $row["matricula"]." - ". $row["carrera"]. " - ". $row["telefono"]. " - " . $row["email"]. "<br>";
			    }
			} else {
			    echo "0 resultados";
			}
		}
	}
	/**
	 * 	Clase para controlar los maestros
	 */
	class maestro
	{
		public $numeroEmpleado="";
		public $carrera="";
		public $nombre="";
		public $telefono="";

		function crearFormulario(){
			?>
			<h3 align="center">Registro de Maestro</h3>
			<form method="POST">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control"required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="numeroEmpleado">Número de Empleado</label>
							<input class="form-control" type="text" name="numeroEmpleado" id="numeroEmpleado"required>
						</div>
						<div class="col-6">
							<label for="carrera">Carrera</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required>						
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="telefono">Teléfono</label>
							<input class="form-control" type="text" name="telefono" id="telefono"required>						
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submitMaestro">Guardar</button>
			</form>
			<?php 
		}

		function insertar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "taw";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			if (isset($_POST["submitMaestro"])) {
				$numeroEmpleado = $_POST['numeroEmpleado'];
				$nombre = $_POST["nombre"];
				$carrera = $_POST["carrera"];
				$telefono = $_POST["telefono"];
			}
			$sql = "INSERT INTO maestro (numeroEmpleado,nombre,carrera,telefono) VALUES ('{$numeroEmpleado}','{$nombre}','{$carrera}','{$telefono}'); ";
			if($conn->query($sql) === TRUE){
				
			}else{
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		function mostrar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "taw";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT numeroEmpleado,nombre,carrera,telefono FROM maestro";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo $row["numeroEmpleado"]. " -" . $row["nombre"]." - ". $row["carrera"]. " - ". $row["telefono"]. " - ". "<br>";
			    }
			} else {
			    echo "0 resultados";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tarea2</title>
    <!--Creacion de los objetos -->
    <?php 
    	$alumno = new alumno(); 
    	$maestro = new maestro();
    ?>
</head>
<body>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
    	<div class="row">
    		<div class="col-6">
    			<?php $alumno->crearFormulario(); 
    			if (isset($_POST["submitAlumno"])) {
					$alumno->insertar();
				}
    			?>
    			<br>
    			<h5>Alumnos Registrados:</h5>
    			<?php $alumno->mostrar(); ?>
    		</div>
    		<div class="col-6">
    			<?php $maestro->crearFormulario();
    			if (isset($_POST["submitMaestro"])) {
					$maestro->insertar();
				}
				?>
				<br>
				<h5>Maestros Registrados:</h5>
				<?php $maestro->mostrar(); ?>  
    		</div>
    		  	
    	</div>
    </div>

</body>
</html>