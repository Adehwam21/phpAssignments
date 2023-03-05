<?php 

class Vehicle 
{
    public $make;   // string
    public $model;  // string
    public $year;   // integer
    public $color;  // string
    public $engine; // object of class Engine

    
    // SET and GET Methods
    public function setMake($make){
        $this -> make =$make;
    }
    public function setModel($model){
        $this -> model =$model;
    }
    public function setYear($year){
        $this -> year =$year;
    }
    public function setColor($color){
        $this -> color =$color;
    }
    public function setEngine($engine){
        $this -> engine = $engine;
    }
    public function getMake(){
        return $this -> make;
    }
    public function getModel(){
        return $this -> model;
    }
    public function getYear(){
        return $this -> year;
    }
    public function getColor(){
        return $this -> color;
    }
    public function getEngine(){
        return $this -> engine;
    }
}


class Engine
{
    public $type;                // string
    public int $displacement;    // integer
    public int $horsepower;      //integer

    // SET and GET methods

    public function setType($type){
        $this -> type = $type;
    }
     public function setDisplacement($displacement){
        $this -> displacement = $displacement;
    }
     public function setHorsepower($horsepower){
        $this -> horsepower = $horsepower;
    }

    public function getType(){
        $this -> type;
    }
    public function getDisplacement(){
        $this -> displacement;
    }
     public function getHorsepower(){
        $this -> horsepower;
    }

}

$engine1 = new Engine();   // creating a new instance of the Engine class

// setting attributes of engine instance
$engine1 -> setHorsepower(158);
$engine1 -> setDisplacement(1996);
$engine1 -> setType("In-Line-4-Cylinder");

$vehicle1 = new Vehicle(); // creating a a new instance of the Vehicle class

// seting attributes of vehicle instance
$vehicle1 -> setMake("Honda");
$vehicle1 -> setModel("Civic sedan");
$vehicle1 -> setYear(2022);
$vehicle1 -> setColor("White");
$vehicle1 -> setEngine($engine1);

// Displaying the details of the vehicle
echo "Make: " . $vehicle1 ->getMake() . "<br>";
echo "Model: " . $vehicle1 ->getModel() . "<br>";
echo "Year: " . $vehicle1 ->getYear() . "<br>";
echo "Color: " . $vehicle1 ->getColor() . "<br>";
echo "Engine Type: " . $vehicle1 -> getEngine() -> type . "<br>";
echo "Engine Displacement: " . $vehicle1 -> getEngine() -> displacement . " cc <br>";
echo "Engine Horsepower: " . $vehicle1 -> getEngine() -> horsepower . " hp <br>";

?>