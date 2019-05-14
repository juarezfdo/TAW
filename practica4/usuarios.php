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

			$sql = "SELECT nombres,apellidos,telefono,direccion,correo_electronico FROM clientes;";
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
		                <td>".$row["nombres"]."</td>
		            </tr>
			        ";
			    }
			} else {
			    echo "0 resultados";
			}
		}
	}
 ?>