<?php
	class Bola {

		public function SetDiameter($value){
			$this->diameter = $value;
		}
		public function GetDiameter(){
			return $this->diameter;
		}
		public function Getjarijari(){
			return $this->jarijari = $this->diameter / 2;
		}
		public function GetLuasPermukaanBola(){
			return $this->luaspermukaan = 4 * 3.14 * $this->jarijari * $this->jarijari;
		}
		public function GetVolumeBola(){
			return $this->volumebola = 4/3 * 3.14 * $this->jarijari * $this->jarijari * $this->jarijari;
		}
	}
?>