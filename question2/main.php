<?php

abstract class Shape
{
    public $name; // String

    public function setName($name){
        $this -> name = $name;
    }

    public function getName(){
        return  $this -> name;
    }

    abstract public  function calculateArea();

}

class Circle extends Shape
{
    public $radius; // float

    public function setRadius($radius){
        $this -> radius = $radius;
    }

    public function getRadius(){
        return $this -> radius;
    }


    public function calculateArea(){
        return 3.1415 * $this-> radius * $this -> radius;
    }
}

class Rectangle extends Shape
{
    protected $length; // float
    protected $width; // float

    public function setLength($length){
        $this -> length = $length;
    }

    public function setWidth($width){
        $this -> width = $width;
    }

    public function getLength(){
        return $this -> length;
    }

    public function getWidth(){
        return $this -> width;
    }

    public function calculateArea(){
        return $this -> length * $this -> width;
    }
}

// creating circle and rectangle objects
$circle = new Circle();
$rectangle = new Rectangle();

// Demonstrating the usage of functions
// Circle

$circle -> setName("Circle");
$circle -> setRadius(7.0);

echo "Shape: ".$circle -> getName()."<br>";
echo "Radius: ".$circle -> getRadius()."<br>";
echo "Area: ".$circle -> calculateArea()."<br>";
echo "<br>";

// Rectangle
$rectangle -> setName("Rectangle");
$rectangle -> setLength(5.0);
$rectangle -> setWidth(6.0);

echo "Shape: ".$rectangle-> getName()."<br>";
echo "Lenght: ".$rectangle -> getLength()."<br>";
echo "Width: ".$rectangle -> getWidth()."<br>";
echo "Area: ".$rectangle -> calculateArea()."<br>";

?>