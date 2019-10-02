<?php

class Fruits{
	private $colour;

	public function eat() {
		// chew
		// nyum
	}

	public function colourSet($colour) {
		$this->colour = $colour;
	}
}

class Apple extends Fruits{
	public function eat() {
		// chew
		// until the middle part
	}
}

class Orange extends Fruits{
	public function eat() {
		// peel
		// chew
	}
}

$apple = new Apple(); 
$apple->eat();