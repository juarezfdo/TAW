<?php 
	class Usuario{

		public function conexionBD(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tarea3";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}else{
				return $conn;
			}
		}
		public function contarUsuarios(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM user";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function contarTipos(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM user_type";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function contarStatus(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM status";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function contarAccesos(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM user_log";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function contarUsuariosConectados(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM user WHERE status_id=1";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function contarUsuariosDesconectados(){
			//Traer resultado de la conexion de la BD
			$conn = $this->conexionBD();
			//Consulta con el metodo count() que cuenta el total de los registros
			$sql = "SELECT count(*) total FROM user WHERE status_id=2";
			//Ejecutamos la consulta
			$result = $conn->query($sql);
			//Establecemos el array en un auxiliar
			$aux= $result->fetch_assoc();
			//Retornamos el total de registros contados
			return $aux['total'];
		}
		public function mostrarTablaPrincipal(){
			$conn = $this->conexionBD();
			echo "
			<tr>
		      <td>".$this->contarUsuarios()."</td>
		      <td>".$this->contarTipos()."</td>
		      <td>".$this->contarStatus()."</td>
		      <td>".$this->contarAccesos()."</td>
		      <td>".$this->contarUsuariosConectados()."</td>
		      <td>".$this->contarUsuariosDesconectados()."</td>
		    </tr>
			";
		}
		public function tablaUser(){
			$conn = $this->conexionBD();
			$sql = "SELECT * FROM user";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "
			        <tr>
				        <td>".$row["id"]."</td>
		                <td>".$row["email"]."</td>
		                <td>".$row["pssw"]."</td>
		                <td>".$row["status_id"]."</td>
		                <td>".$row["user_type_id"]."</td>
		            </tr>
			        ";
			    }
			} 
		}
		public function tablaUser_log(){
			$conn = $this->conexionBD();
			$sql = "SELECT * FROM user_log";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "
			        <tr>
				        <td>".$row["id"]."</td>
		                <td>".$row["date_logged"]."</td>
		                <td>".$row["user_id"]."</td>
		            </tr>
			        ";
			    }
			} 
		}
		public function tablaUser_type(){
			$conn = $this->conexionBD();
			$sql = "SELECT * FROM user_type";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "
			        <tr>
				        <td>".$row["id"]."</td>
		                <td>".$row["name"]."</td>
		            </tr>
			        ";
			    }
			} 
		}
		public function tablaStatus(){
			$conn = $this->conexionBD();
			$sql = "SELECT * FROM status";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "
			        <tr>
				        <td>".$row["id"]."</td>
		                <td>".$row["name"]."</td>
		            </tr>
			        ";
			    }
			} 
		}
	}
 ?>