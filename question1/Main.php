<?php

// Main.php

require_once 'Person.php';

// Two employee objects
$employee1 = new Employee();
$employee2 = new Employee();

$manager1 = new Manager();
$manager2 = new Manager();
// Demonstrating methods
//demonstrating get and set methods for employee objects
$employee1 -> setName ("Rhyuk Light");
$employee1 -> setAge (31);
$employee1 -> setGender ("Male");
$employee1 -> setID (000001);
$employee1 -> setPosition ("Teller 1");
$employee1 -> setSalary (850.60);

echo "EMPLOYEE 1\n";
echo"Name: {$employee1 -> getName ()}\n";
echo"Age: {$employee1 -> getAge ()}\n";
echo"Gender: {$employee1 -> getGender ()}\n";
echo"ID: {$employee1 -> getID ()}\n";
echo"Position {$employee1 -> getPosition ()}\n";
echo"Salary: {$employee1 -> getSalary ()}\n\n";

$employee2 -> setName ("Abigail Jenson");
$employee2 -> setAge (29);
$employee2 -> setGender ("Female");
$employee2 -> setID (000002);
$employee2 -> setPosition ("Teller 2");
$employee2 -> setSalary (850.60);

echo "EMPLOYEE 2\n";
echo"Name: {$employee2 -> getName ()}\n";
echo"Age: {$employee2 -> getAge ()}\n";
echo"Gender: {$employee2 -> getGender ()}\n";
echo"ID: {$employee2 -> getID ()}\n";
echo"Position {$employee2 -> getPosition ()}\n";
echo"Salary: {$employee2 -> getSalary ()}\n\n";

// demonstrating get and set methods for manager objects
$manager1 = new Manager();
$manager1 -> setName ("Daniel Voss");
$manager1 -> setAge ("56");
$manager1 -> setGender ("Male");
$manager1 -> setID (100001);
$manager1 -> setPosition ("Manager");
$manager1 -> setSalary (2000.79);
$manager1 -> setBonus(430.55)

echo"MANAGER 1\n";
echo"Name: {$manager1 -> getName ()}\n";
echo"Age: {$manager1 -> getAge ()}\n";
echo"Gender: {$manager1 -> getGender ()}\n";
echo"ID: {$manager1 -> getID ()}\n";
echo"Position: {$manager1 -> getPosition ()}";
echo"Salary: {$manager1 -> getSalary ()}\n";
echo"Bonus: {$manager1 -> getBonus()}\n\n";

$manager2 = new Manager();
$manager2 -> setName ("Linda Brown");
$manager2 -> setAge ("45 years");
$manager2 -> setGender ("Female");
$manager2 -> setID (100002);
$manager2 -> setPosition ("Assistant Manager");
$manager2 -> setSalary (1500.50);
$manager2 -> setBonus (299.78)

"MANAGER 2\n";
echo"Name: {$manager2 -> getName ()}\n";
echo"Age: {$manager2 -> getAge ()}\n";
echo"Gender: {$manager2 -> getGender ()}\n";
echo"ID: {$manager2 -> getID ()}\n";
echo"Position: {$manager2 -> getPosition ()}";
echo"Salary: {$manager2 -> getSalary ()}\n";
echo"Bonus: {$manager2 -> getBonus()}\n\n";

?>