<?php 
	class usuario{
		public $nombre,$apellidos,$telefono,$direccion,$email;

		function mostrar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tuto_poo";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT id,nombres,apellidos,telefono,direccion,correo_electronico FROM clientes;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "
			        <tr>
				        <td>".$row["nombres"]."</td>
		                <td>".$row["apellidos"]."</td>
		                <td>".$row["telefono"]."</td>
		                <td>".$row["direccion"]."</td>
		                <td>".$row["correo_electronico"]."</td>
		                <td><a class='btn btn-warning fa fa-edit' href = '../clientes/edit.php?id=".$row['id']."'</a> 
						<a class='btn btn-danger fa fa-trash' data-toggle='modal' data-nombre='nombre' data-target='#eliminar_registro'</a></td>
		            </tr>
			        ";
			    }
			} else {
			    echo "0 resultados";
			}
		}

		function formularioCrear(){
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-6">
							<label for="nombres">Nombre(s):</label>
							<input type="text" name="nombres" id="nombres" class="form-control"required>
						</div>
						<div class="col-lg-6">
							<label for="apellidos">Apellido(s):</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="telefono">Teléfono:</label>
							<input class="form-control" type="text" name="telefono" id="telefono"required>
						</div>
						<div class="col-lg-6">
							<label for="direccion">Direccion:</label>
							<input class="form-control" type="text" name="direccion" id="direccion"required>						
						</div>
						<div class="col-lg-3">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" id="email"required>						
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
			</form>
			<?php 
		}

		function insertar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tuto_poo";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			if (isset($_POST["Guardar"])) {
				$nombres = $_POST['nombres'];
				$apellidos = $_POST["apellidos"];
				$telefono = $_POST["telefono"];
				$direccion = $_POST["direccion"];
				$email = $_POST["email"];
			}
			$sql = "INSERT INTO clientes (nombres,apellidos,telefono,direccion,correo_electronico) VALUES ('{$nombres}','{$apellidos}','{$telefono}','{$direccion}','{$email}'); ";
			if($conn->query($sql) === TRUE){
				
			}else{
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
			if ($conn->query($sql) === TRUE) {
		      echo'<script type="text/javascript">
		        alert("Añadido con Exito");
		        window.location.href="index.php";
		        </script>';
		      echo "Guardo con Exito";
		    }
		}

		function editar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tuto_poo";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($_GET['id']) {
	          $id = $_GET['id'];
	          $sql = "SELECT * FROM clientes WHERE id={$id}";
	          $result = $conn->query($sql);
	          $data = $result->fetch_assoc();
	        }
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-6">
							<label for="nombres">Nombre(s):</label>
							<input type="text" name="nombres" id="nombres" class="form-control" required value="<?php echo $data['nombres'] ?>">
						</div>
						<div class="col-lg-6">
							<label for="apellidos">Apellido(s):</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control"required value="<?php echo $data['apellidos'] ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="telefono">Teléfono:</label>
							<input class="form-control" type="text" name="telefono" id="telefono"required value="<?php echo $data['telefono'] ?>">
						</div>
						<div class="col-lg-6">
							<label for="direccion">Direccion:</label>
							<input class="form-control" type="text" name="direccion" id="direccion"required value="<?php echo $data['direccion'] ?>">						
						</div>
						<div class="col-lg-3">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" id="email"required value="<?php echo $data['correo_electronico'] ?>">						
						</div>
					</div>
				</div>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
			</form>
			<?php 
			if (isset($_POST['Guardar'])) {
				$this->update();
			}
		}

		function update(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tuto_poo";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			if (isset($_POST["Guardar"])) {
				$id = $_POST['id'];
				$nombres = $_POST['nombres'];
				$apellidos = $_POST["apellidos"];
				$telefono = $_POST["telefono"];
				$direccion = $_POST["direccion"];
				$email = $_POST["email"];
			}
			$sql = "UPDATE clientes SET nombres='$nombres',apellidos='$apellidos',telefono='$telefono',direccion='$direccion',correo_electronico='$email' WHERE id={$id} ";
			if($conn->query($sql) === TRUE){
				
			}else{
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
			if ($conn->query($sql) === TRUE) {
		      echo'<script type="text/javascript">
		        alert("Editado con Exito");
		        window.location.href="index.php";
		        </script>';
		      echo "Editado con Exito";
		    }
		}

		function eliminar(){
			
		}
	}
 ?>