<?php
class Person
{
    public $firstName; // string
    public $lastName;  // string
    public $age;       // integer

    public function setFirstName($firstName){
        $this -> firstName = $firstName;
    }
    public function setLastName($lastName){
        $this -> lastName = $lastName;
    }
    public function setAge($age){
        $this -> age = $age;
    }

    public function getFirstName(){
        return $this -> firstName;
    }
    public function getLastName(){
        return $this -> lastName;
    }
    public function getAge(){
        return $this -> age;
    }
}
//creating new instance of the Person class
$person = new Person(); 

// setting properties of the new instance 
$person -> setFirstName("Mikalynn");
$person -> setLastName("Creppy");
$person -> setAge(16);

// print out the person's full name and age
echo "Person Details <br>";
echo "Full name: ". $person -> getFirstName()." ". $person -> getLastName()."<br>";
echo "Age: ". $person -> getAge()."<br><br>";

class Student extends Person
{
    public $gradeLevel;     // integer
    public $gpa;            // float

    public function setGradeLevel($gradeLevel){
        $this -> gradeLevel = $gradeLevel;
    }
    public function setGpa($gpa){
        $this -> gpa = $gpa;
    }
    public function getGradeLevel(){
        return $this -> gradeLevel;
    }
    public function getGpa(){
        return $this -> gpa;
    }
}

//creating new instance of the Student class
$student = new Student(); 

// setting properties of the new instance 
$student -> setFirstName("Aaron");
$student -> setLastName("Kudadjie");
$student -> setAge(23);
$student -> setGradeLevel(7);
$student -> setGpa(3.6);

// print out the person's full name and age
echo "Student Details <br>";
echo "Full name: ". $student -> getFirstName()." ". $student -> getLastName()."<br>";
echo "Age: ". $student -> getAge()."<br>";
echo "Grade level: ". $student -> getGradeLevel()."<br>";
echo "GPA: ". $student -> getGpa()."<br><br>";

class Teacher extends Person
{
    public $subject;        // string
    public $yearsTeaching;   // integer

    public function setSubject($subject){
        $this -> subject = $subject;
    }
    public function setYearsTeaching($yearsTeaching){
        $this -> yearsTeaching = $yearsTeaching;
    }
    public function getSubject(){
        return $this -> subject;
    }
    public function getYearsTeaching(){
        return $this -> yearsTeaching;
    }
}

//creating new instance of the Student class
$teacher = new Teacher(); 

// setting properties of the new instance 
$teacher -> setFirstName("Benedicta");
$teacher-> setLastName("Sandra");
$teacher -> setAge(30);
$teacher -> setSubject("History");
$teacher -> setyearsTeaching(4);

// print out the person's full name and age
echo "Teacher Details <br>";
echo "Full name: ". $teacher -> getFirstName()." ". $teacher -> getLastName()."<br>";
echo "Age: ". $teacher -> getAge()."<br>";
echo "Subject teaching: ". $teacher -> getSubject()."<br>";
echo "Years teaching: ". $teacher -> getYearsTeaching()."yrs <br><br>";

?>