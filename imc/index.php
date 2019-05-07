<?php 
	//Incluir la clase
	include "persona.php";
	//Instanciar la clase
	$persona = new persona();
	//Asignar valores a los propiedades del objeto
	$persona->setEdad(30);
	$persona->setAltura(1.80);
	$persona->setPeso(80);

	//Impresiones de los resultados
	echo "<br>Edad: ".$persona->edad;
	echo "<br>Altura: ".$persona->altura;
	echo "<br>Peso: ".$persona->peso;
	echo "<br>IMC: ".$persona->imc();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora IMC</title>
</head>
<body>

</body>
</html>