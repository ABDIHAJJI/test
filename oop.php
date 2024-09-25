<?php
class Car {
    // Properties
    public $brand;
    public $color;
    // Method (constructor)
    public function __construct($brand, $color) {
    $this->brand = $brand;
    $this->color = $color;
    }
    // Method to display car details
    public function displayInfo() {
    echo "This is a {$this->color} {$this->brand}.";
    }
   }
   // Creating an object of class Car
$myCar = new Car("Toyota", "Red");
// Accessing the method
$myCar->displayInfo(); // Output: This is a Red Toyota.
?>