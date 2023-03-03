<?php
// AASSIGNMENT ONE

class Person    // creating class Person and setting its properties
{

    private   $name;      // string
    private   $age;       // integer
    private   $gender;    // string

    // get methods
    public function getName(){
        return $this -> name;
    }

    public function getAge(){
        return $this -> age;
    }

    public function getGender(){
        return $this -> gender;
    }

    // set methods
    
    public function setName($name){
        $this -> name = $name;
    }

    public function setAge($age){
        $this -> age = $age;
    }

    public function setGender($gender){
        $this -> gender = $gender;
    }
}

// creating a manager class that extends the Person class
class Employee extends Person
{
    public  $id;        // integer
    public  $position;  // string
    public  $salary;    // float


    // get methods
    public function getID(){
        return $this -> id;
    }

    public function getPosition(){
        return $this -> position;
    }

    public function getSalary(){
        return $this -> salary;
    }

    // set methods
    public function setID($id){
        $this -> id = $id;
    }

    public function setPosition(){
        $this -> position = $position;
    }

    public function setSalary(){
        $this -> salary = $salary;
    }

}
    
// creating Manager class that extends the Employee class
class Manager extends Employee
{

    public $bonus;  // float

    // get methods
    public function getBonus(){
        return $this -> bonus; 
    }

    // set methods
    public function setBonus($bonus){
        $this -> bonus = $bonus;
    }
}
?>