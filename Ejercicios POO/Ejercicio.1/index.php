<?php

class ConvertidorTemperatura {
public $celsius;
public $fahrenheit;

public function __construct($celsius) {

$this->celsius = $celsius;

}

public function convertirACelsius() {

$this->fahrenheit = ($this->celsius * 9/5) + 32;

}

public function getFahrenheit() {

return $this->fahrenheit;

}

}


$convertidor = new ConvertidorTemperatura(20);

$convertidor->convertirACelsius();

echo "20 grados Celsius son: ".$convertidor->getFahrenheit()." grados Fahrenheit";

?>