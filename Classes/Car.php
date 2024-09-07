<?php
// visibility modifier = who has access to this info

// private = only this class has access
// protected = only this class and its child has access
// public = everyone has access to this class

// using getter and setter can create more logic rather than constract based

class Car {

  // Properties / Fields
  private $brand;
  private $color;
  // private $vehicleType = "car";
  public $vehicleType = "car";

  // Constructor

  public function __construct($brand, $color = "none") {
    $this->brand = $brand;
    $this->color = $color;
  }

  // Method

  public function getCarInfo() {
    return "Brand: " . $this->brand . " Color: " . $this->color;
  }

  // Getter and Setter

  public function getBrand() {
    return $this->brand;
  }

  public function setBrand($brand) {
    $this->brand = $brand;
  }

  public function getColor() {
    return $this->color;
  }

  public function setColor($color) {
    $allowedColors = ["red", "blue", "green", "yellow"];
    if (in_array($color, $allowedColors)) {
      $this->color = $color;
    }
  }




}

// $car01 = new Car("Volvo", "Green");
// $car02 = new Car("BMW", "Blue");
// $car03 = new Car("Yamaha");
// // echo $car01->vehicleType;
// echo $car01->getCarInfo();
