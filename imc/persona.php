<?php 
	//Definir la clase persona
	class persona{
		//Definir propiedades
		public $edad,$altura,$peso;

		//Definir metodo obtencion de datos
		//getters
		public function getEdad(){
			return $this->edad;
		}

		public function getPeso(){
			return $this->peso;
		}

		public function getAltura(){
			return $this->altura;
		}

		//Definir Metodos de asignacion de datos
		//setters
		public function setEdad($valor){
			$this->edad = $valor;
		}

		public function setPeso($valor){
			$this->peso = $valor;
		}

		public function setAltura($valor){
			$this->altura = $valor;
		}

		//Definir metodo de calculo de IMC accediendo a las propiedades
		public function imc(){
			return $this->peso/($this->altura * $this->altura);
		}
		//Usando los metodos
		public function imc2(){
			return $this->getPeso()/($this->getAltura() * $this->getAltura());
		}

		public function insertar(){
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

			if (isset($_POST["calcular"])) {
				$Edad = $_POST['Edad'];
				$peso = $_POST["peso"];
				$altura = $_POST["altura"];
				$imc = $peso/($altura*$altura);
				?> <br><h4>Tu IMC es de: </h4> <?php echo $imc;
			}
			$sql = "INSERT INTO practica2_imc (Edad,peso,altura,imc) VALUES ('{$Edad}','{$peso}','{$altura}','{$imc}'); ";
			if($conn->query($sql) === TRUE){
				
			}else{
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		public function crearFormulario(){
			?>
			<form method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="Edad">Edad</label>
							<input type="number" name="Edad" id="Edad" class="form-control"required>
						</div>
					</div>
					
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6">
							<label for="peso">Peso:</label>
							<input class="form-control" type="text" name="peso" id="peso"required>
						</div>
						<div class="col-6">
							<label for="altura">Altura</label>
							<input class="form-control" type="text" name="altura" id="altura"required>						
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="calcular">Calcular</button>
			</form>
			<?php 
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

			$sql = "SELECT edad,peso,altura,imc FROM practica2_imc;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "Edad: ".$row["edad"]. ", Peso:" . $row["peso"].", Altura: ". $row["altura"].", IMC:  ".$row["imc"]. "<br>";
			    }
			} else {
			    echo "0 resultados";
			}
		}
	}
 ?>