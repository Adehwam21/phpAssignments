<?php
// AASSIGNMENT ONE

class Person    // creating class Person and setting its properties
{
    private $name;      // string
    private $age;       // integer
    private $gender;    // string

    public function__construct($name,$age,$gender) // constructor method
    {
        $this.name -> $name;    
        $this.age -> $age;      
        $this.gender -> gender; 
    }


    // get methods
    public function getName(){
        return $this -> name = name;
    }

    public function getAge(){
        return $this -> age = age;
    }

    public function getGender(){
        return $this -> gender = gender;
    }

    // set methods
    
    public function setName($name){
        $this -> name = name;
    }

    public function setAge($age){
        $this -> age = age;
    }

    public function setGender($gender){
        $this -> gender = gender;
    }

    // creating a manager class that extends the Person class
    class Employee extends Person
    {
        private $id;        // integer
        private $position;  // string
        private $salary;    // float
    }
    // get methods
    public function getID(){
        return $this -> id = id;
    }

    public function getPosition(){
        return $this -> id = id;
    }

    public function getSalary(){
        return $this -> salary = salary;
    }

    // set methods
    public function setID($id){
        $this -> id = id;
    }

    public function setPosition(){
        $this -> position = position;
    }

    public function setSalary(){
        $this -> salary = salary;
    }


    // creating Manager class that extends the employee class
    class Manager extends Employee
    {
        private $bonus;     // float
    }

    // get methods
    public function getBonus(){
        return $this -> bonus = bonus;
    }

    // set methods
    public function setBonus($bonus){
        $this -> bonus = bonus;
    }

    

}
?>