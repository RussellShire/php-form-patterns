<?php
class Beverage {
  public $temperature, $color, $opacity;

  // constructor method allows for default values and adding data on object instantiation
  function __construct($temperature, $color) {
    $this->temperature = $temperature;
    $this->color = $color;
  }

  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}

$soda = new Beverage("cold", "black");

echo $soda->getInfo();
