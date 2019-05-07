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
	}
 ?>