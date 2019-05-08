<?php 
	//Definir Clase para los Alumnos
	class promedio{
		public $unidad1,$unidad2,$unidad3;

		function setValues($u1,$u2,$u3){
			$this->unidad1 = $u1;
			$this->unidad2 = $u2;
			$this->unidad3 = $u3;
		}
		function getUnidad1(){
			return $this->unidad1;
		}

		function promedio(){
			$promedio = 60;
			if ($this->unidad1<=60) {
				return $promedio;
			}else{
				$promedio = ($this->unidad1+$this->unidad2+$this->unidad3)/3;
				return $promedio;
			}
		}
	}

 ?>