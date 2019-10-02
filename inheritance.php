<?php

class Cars{
	public $name, $brand, $colour, 
		   $maximumSpeed, $totalPassengers, 

	public function increaseSpeed() {

		return "Speed Increased!";
	}
}

class SportCars extends Cars{
	public $turbo = false;

	public function runTurbo() {
		$this->turbo = true;
		return "Turbo run!";
	}
}

$cars1 = new SportCars();
echo $cars1->increaseSpeed();
echo "<br>";
echo $cars1->runTurbo();