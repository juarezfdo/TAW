<?php 
	include "promedio.php";
	echo "<h3>Lista de Promedios:</h3>";
	$calificaciones = array(10);	
	$alumno1 = new promedio();
	$alumno1->setValues(100,90,80);
	$calificaciones[0] = $alumno1->promedio();
	$alumno2 = new promedio();
	$alumno2->setValues(60,90,80);
	$calificaciones[1] = $alumno2->promedio();
	$alumno3 = new promedio();
	$alumno3->setValues(90,60,80);
	$calificaciones[2] = $alumno3->promedio();
	$alumno4 = new promedio();
	$alumno4->setValues(70,90,80);
	$calificaciones[3] = $alumno4->promedio();
	$alumno5 = new promedio();
	$alumno5->setValues(90,85,80);
	$calificaciones[4] = $alumno5->promedio();
	$alumno6 = new promedio();
	$alumno6->setValues(90,95,80);
	$calificaciones[5] = $alumno6->promedio();
	$alumno7 = new promedio();
	$alumno7->setValues(70,70,70);
	$calificaciones[6] = $alumno7->promedio();
	$alumno8 = new promedio();
	$alumno8->setValues(61,61,61);
	$calificaciones[7] = $alumno8->promedio();
	$alumno9 = new promedio();
	$alumno9->setValues(90,90,80);
	$calificaciones[8] = $alumno9->promedio();
	$alumno10 = new promedio();
	$alumno10->setValues(90,90,80);
	$calificaciones[9] = $alumno10->promedio();
	arsort($calificaciones);
	foreach ($calificaciones as $key => $value) {
		echo "<br>". $value;
	}
 ?>