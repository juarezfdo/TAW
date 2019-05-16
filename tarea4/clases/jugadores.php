<?php 
	class Jugador{
		public function conexionBD_PDO(){
			$servername = "localhost";
			$username = "root";
			$password = "";

			try {
			    $conn = new PDO("mysql:host=$servername;dbname=tarea3", $username, $password);
			    // set the PDO error mode to exception
			    return $conn;
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    echo "Connected successfully"; 
			    }
			catch(PDOException $e)
			    {
			    echo "Connection failed: " . $e->getMessage();
			    }
		}
		public function mostrarFutbolistas(){
			$conn = $this->conexionBD_PDO();
			$sql = "SELECT * FROM jugadores WHERE tipo=1";
			try {
			    $data = $conn->query($sql)->fetchAll();
				// and somewhere later:
				foreach ($data as $row) {
				    echo "
			        <tr>
				        <td>".$row["numero"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["posicion"]."</td>
		                <td>".$row["carrera"]."</td>
		                <td>".$row["email"]."</td>
		                <td><a class='btn btn-warning fa fa-edit' href = 'futbol/edit.php?id=".$row['id']."'</a> 
						 <a class='btn btn-danger fa fa-trash' href='futbol/delete.php?id=".$row['id']."'</a></td>
		            </tr>
			        ";
				}
			} catch (Exception $e) {
					
			}
		}
		public function mostrarBasquetbolista(){
			$conn = $this->conexionBD_PDO();
			$sql = "SELECT * FROM jugadores WHERE tipo=2";
			try {
			    $data = $conn->query($sql)->fetchAll();
				// and somewhere later:
				foreach ($data as $row) {
				    echo "
			        <tr>
				        <td>".$row["numero"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["posicion"]."</td>
		                <td>".$row["carrera"]."</td>
		                <td>".$row["email"]."</td>
		                <td><a class='btn btn-warning fa fa-edit' href = 'basquetbol/edit.php?id=".$row['id']."'</a> 
						 <a class='btn btn-danger fa fa-trash' href='basquetbol/delete.php?id=".$row['id']."'</a></td>
		            </tr>
			        ";
				}
			} catch (Exception $e) {
					
			}
		}
		public function formularioRegistrarFutbolista(){
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="numero">Número</label>
							<input type="number" name="numero" id="numero" class="form-control"required>
						</div>
						<div class="col-lg-9">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="posicion">Posición:</label>
							<input class="form-control" type="text" name="posicion" id="posicion"required>
						</div>
						<div class="col-lg-6">
							<label for="carrera">Carrera:</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required>						
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
		public function formularioRegistrarBasquetbolista(){
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="numero">Número</label>
							<input type="number" name="numero" id="numero" class="form-control"required>
						</div>
						<div class="col-lg-9">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="posicion">Posición:</label>
							<input class="form-control" type="text" name="posicion" id="posicion"required>
						</div>
						<div class="col-lg-6">
							<label for="carrera">Carrera:</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required>						
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
		public function registrarFutbolista(){
			$conn = $this->conexionBD_PDO();
			if (isset($_POST["Guardar"])) {
				$numero = $_POST['numero'];
				$nombre = $_POST["nombre"];
				$posicion = $_POST["posicion"];
				$carrera = $_POST["carrera"];
				$email = $_POST["email"];
				$tipo = 1;//1=Futbolista,2=Basquetbolista
			}
			
			try {
				$sql = "INSERT INTO jugadores (numero,nombre,posicion,carrera,email,tipo) VALUES ('{$numero}','{$nombre}','{$posicion}','{$carrera}','{$email}','{$tipo}'); ";
				$conn->exec($sql);
				echo'<script type="text/javascript">
		        alert("Añadido con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
				
			}
		}
		public function registrarBasquetbolista(){
			$conn = $this->conexionBD_PDO();
			if (isset($_POST["Guardar"])) {
				$numero = $_POST['numero'];
				$nombre = $_POST["nombre"];
				$posicion = $_POST["posicion"];
				$carrera = $_POST["carrera"];
				$email = $_POST["email"];
				$tipo = 2;//1=Futbolista,2=Basquetbolista
			}
			
			try {
				$sql = "INSERT INTO jugadores (numero,nombre,posicion,carrera,email,tipo) VALUES ('{$numero}','{$nombre}','{$posicion}','{$carrera}','{$email}','{$tipo}'); ";
				$conn->exec($sql);
				echo'<script type="text/javascript">
		        alert("Añadido con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
				
			}
		}
		public function formularioEditarFutbolista(){
			$conn = $this->conexionBD_PDO();
			if ($_GET['id']) {
	          $id = $_GET['id'];
	          $sql = "SELECT * FROM jugadores WHERE id={$id}";
	          $data = $conn->query($sql)->fetch();
	        }
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="numero">Número</label>
							<input type="number" name="numero" id="numero" class="form-control"required value="<?php echo $data['numero'] ?>">
						</div>
						<div class="col-lg-9">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control"required value="<?php echo $data['nombre'] ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="posicion">Posición:</label>
							<input class="form-control" type="text" name="posicion" id="posicion"required value="<?php echo $data['posicion'] ?>">
						</div>
						<div class="col-lg-6">
							<label for="carrera">Carrera:</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required value="<?php echo $data['carrera'] ?>">						
						</div>
						<div class="col-lg-3">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" id="email"required value="<?php echo $data['email'] ?>">						
						</div>
					</div>
				</div>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
			</form>
			
			<?php 
			if (isset($_POST['Guardar'])) {
				$this->editarFutbolista();
			}
		}
		public function formularioEditarBasquetbolista(){
			$conn = $this->conexionBD_PDO();
			if ($_GET['id']) {
	          $id = $_GET['id'];
	          $sql = "SELECT * FROM jugadores WHERE id={$id}";
	          $data = $conn->query($sql)->fetch();
	        }
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="numero">Número</label>
							<input type="number" name="numero" id="numero" class="form-control"required value="<?php echo $data['numero'] ?>">
						</div>
						<div class="col-lg-9">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control"required value="<?php echo $data['nombre'] ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-3">
							<label for="posicion">Posición:</label>
							<input class="form-control" type="text" name="posicion" id="posicion"required value="<?php echo $data['posicion'] ?>">
						</div>
						<div class="col-lg-6">
							<label for="carrera">Carrera:</label>
							<input class="form-control" type="text" name="carrera" id="carrera"required value="<?php echo $data['carrera'] ?>">						
						</div>
						<div class="col-lg-3">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" id="email"required value="<?php echo $data['email'] ?>">						
						</div>
					</div>
				</div>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
			</form>
			
			<?php 
			if (isset($_POST['Guardar'])) {
				$this->editarBasquetbolista();
			}
		}
		public function editarFutbolista(){
			$conn = $this->conexionBD_PDO();
			if (isset($_POST["Guardar"])) {
				$id = $_POST['id'];
				$numero = $_POST['numero'];
				$nombre = $_POST["nombre"];
				$posicion = $_POST["posicion"];
				$carrera = $_POST["carrera"];
				$email = $_POST["email"];
				$tipo = 1;//1=Futbolista,2=Basquetbolista
			}
			$sql = "UPDATE jugadores SET numero='$numero',nombre='$nombre',posicion='$posicion',carrera='$carrera',email='$email',tipo='$tipo' WHERE id={$id}";
			try {
				// Prepare statement
			    $stmt = $conn->prepare($sql);

			    // execute the query
			    $stmt->execute();
			    echo'<script type="text/javascript">
		        alert("Actualizado con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
					
			}
		}
		public function editarBasquetbolista(){
			$conn = $this->conexionBD_PDO();
			if (isset($_POST["Guardar"])) {
				$id = $_POST['id'];
				$numero = $_POST['numero'];
				$nombre = $_POST["nombre"];
				$posicion = $_POST["posicion"];
				$carrera = $_POST["carrera"];
				$email = $_POST["email"];
				$tipo = 2;//1=Futbolista,2=Basquetbolista
			}
			$sql = "UPDATE jugadores SET numero='$numero',nombre='$nombre',posicion='$posicion',carrera='$carrera',email='$email',tipo='$tipo' WHERE id={$id}";
			try {
				// Prepare statement
			    $stmt = $conn->prepare($sql);

			    // execute the query
			    $stmt->execute();
			    echo'<script type="text/javascript">
		        alert("Actualizado con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
					
			}
		}
		public function eliminarFutbolista(){
			$conn = $this->conexionBD_PDO();
			if ($_GET["id"]) {
				$id = $_GET["id"];
			}
			$sql = "DELETE FROM jugadores WHERE id = {$id}";
			try {
				$conn->exec($sql);
				echo'<script type="text/javascript">
		        alert("Eliminado con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
				
			}
		}
		public function eliminarBasquetbolista(){
			$conn = $this->conexionBD_PDO();
			if ($_GET["id"]) {
				$id = $_GET["id"];
			}
			$sql = "DELETE FROM jugadores WHERE id = {$id}";
			try {
				$conn->exec($sql);
				echo'<script type="text/javascript">
		        alert("Eliminado con Exito");
		        window.location.href="../ejercicio2.php";
		        </script>';
			} catch (Exception $e) {
				
			}
		}
	}
?>