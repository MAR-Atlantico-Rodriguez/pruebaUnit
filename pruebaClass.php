<?php
	class PruebaClass{

		public $array = ['foo'=>'algo','otra'=>'cosa'];

	 	public function suma($a,$b) {
	 	  	return $a+$b;
	 	}

	 	public function resta($a,$b) {
	 	  	return $a-$b;
	 	}

	 	public function multiplicacion($a,$b) {
	 	  	return $a*$b;
	 	}

	 	public function comprobarArrayKey(){
	 		return $this->array;
	 	}

	 	public function ordenarArray($array){
	 		sort($array);
	 		return $array;
	 	}
	}

?>