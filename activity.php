<?php
/* =========================================
   Problem 1: Vehicles
   ========================================= */
class Vehicle {
    public $brand, $year;
    function drive() { echo "The vehicle is moving.<br>"; }
}

class Car extends Vehicle {
    public $num_doors;
    function drive() { echo "The car is driving on the road.<br>"; }
}

class Bicycle extends Vehicle {
    public $type;
    function drive() { echo "The bicycle is being pedaled.<br>"; }
}

$car = new Car();
$car->brand = "Toyota";
$car->year = 2022;
$car->num_doors = 4;

$bike = new Bicycle();
$bike->brand = "Giant";
$bike->year = 2021;
$bike->type = "mountain";

echo "Car: $car->brand, $car->year, $car->num_doors doors<br>";
$car->drive();
echo "Bicycle: $bike->brand, $bike->year, $bike->type<br>";
$bike->drive();

echo "<hr>";

/* =========================================
   Problem 2: Employees
   ========================================= */
class Employee {
    public $name, $salary;
    function work() { echo "Employee is working.<br>"; }
}

class Teacher extends Employee {
    public $subject;
    function work() { echo "Teaching $this->subject.<br>"; }
}

class Developer extends Employee {
    public $language;
    function work() { echo "Coding in $this->language.<br>"; }
}

$t = new Teacher();
$t->name = "Alice"; $t->salary = 30000; $t->subject = "Math";

$d = new Developer();
$d->name = "Bob"; $d->salary = 50000; $d->language = "PHP";

$t->work();
$d->work();

echo "<hr>";

/* =========================================
   Problem 3: Shapes
   ========================================= */
class Shape {
    public $color, $filled;
    function area() { echo "Area formula not defined.<br>"; }
}

class Circle extends Shape {
    public $radius;
    function area() { return 3.14159 * $this->radius * $this->radius; }
}

class Rectangle extends Shape {
    public $length, $width;
    function area() { return $this->length * $this->width; }
}

$c = new Circle();
$c->radius = 5;
$r = new Rectangle();
$r->length = 4; $r->width = 6;

echo "Circle area: " . $c->area() . "<br>";
echo "Rectangle area: " . $r->area() . "<br>";

echo "<hr>";

/* =========================================
   Problem 4: Bank Accounts
   ========================================= */
class BankAccount {
    public $account_number, $balance;
    function deposit($amount) { $this->balance += $amount; echo "Deposited $amount. Balance: $this->balance<br>"; }
    function withdraw($amount) { $this->balance -= $amount; echo "Withdrew $amount. Balance: $this->balance<br>"; }
}

class SavingsAccount extends BankAccount {
    public $interest_rate;
    function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Withdrawal denied. Not enough balance.<br>";
        } else {
            $this->balance -= $amount;
            echo "Withdrew $amount. Balance: $this->balance<br>";
        }
    }
}

class CheckingAccount extends BankAccount {
    public $overdraft_limit;
    function withdraw($amount) {
        if ($amount > $this->balance + $this->overdraft_limit) {
            echo "Withdrawal denied. Overdraft limit reached.<br>";
        } else {
            $this->balance -= $amount;
            echo "Withdrew $amount. Balance: $this->balance<br>";
        }
    }
}

$sav = new SavingsAccount();
$sav->account_number = "S001"; $sav->balance = 500; $sav->interest_rate = 0.03;

$chk = new CheckingAccount();
$chk->account_number = "C001"; $chk->balance = 200; $chk->overdraft_limit = 100;

$sav->deposit(50);
$sav->withdraw(600);
$chk->withdraw(250);
$chk->deposit(40);

echo "<hr>";

/* =========================================
   Problem 5: Animals (Polymorphism)
   ========================================= */
class Animal {
    public $name, $age;
    function makeSound() { echo "Some sound...<br>"; }
}

class Dog extends Animal { function makeSound() { echo "Woof!<br>"; } }
class Cat extends Animal { function makeSound() { echo "Meow!<br>"; } }
class Bird extends Animal { function makeSound() { echo "Chirp!<br>"; } }

$animals = [ new Dog(), new Cat(), new Bird() ];
foreach ($animals as $a) { $a->makeSound(); }

echo "<hr>";

/* =========================================
   Problem 6: Online Store Products
   ========================================= */
class Product {
    public $name, $price;
    function getDetails() { echo "Product details not available.<br>"; }
}

class Book extends Product {
    public $author, $pages;
    function getDetails() { echo "Book: $this->name, Author: $this->author, Pages: $this->pages, Price: $this->price<br>"; }
}

class Clothing extends Product {
    public $size, $color;
    function getDetails() { echo "Clothing: $this->name, Size: $this->size, Color: $this->color, Price: $this->price<br>"; }
}

$book = new Book();
$book->name = "PHP Basics"; $book->price = 15.99; $book->author = "John Doe"; $book->pages = 200;

$shirt = new Clothing();
$shirt->name = "T-Shirt"; $shirt->price = 9.99; $shirt->size = "M"; $shirt->color = "Black";

$book->getDetails();
$shirt->getDetails();

echo "<hr>";

/* =========================================
   Problem 7: University Members
   ========================================= */
class Person {
    public $name, $age;
    function introduce() { echo "Hello, I'm a person.<br>"; }
}

class Student extends Person {
    public $major;
    function introduce() { echo "I am a student majoring in $this->major.<br>"; }
}

class Professor extends Person {
    public $department;
    function introduce() { echo "I am a professor from the $this->department department.<br>"; }
}

$s = new Student();
$s->name = "Charlie"; $s->age = 20; $s->major = "Computer Science";

$p = new Professor();
$p->name = "Dr. Smith"; $p->age = 45; $p->department = "Mathematics";

$s->introduce();
$p->introduce();
?>