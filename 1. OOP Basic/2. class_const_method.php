<?php
//class constrac
class Human {
    public $name;
    public $age;

    function __construct($personName, $personAge = 0) {
        // echo "New Human Object is Created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi() {
        echo "Hello\n";
        $this->sayName();
    }

    function sayName() {
        if($this->age) {
            echo "My Name is {$this->name}, I am {$this->age} year's old.\n";
        } else {
            echo "My Name is {$this->name}, I dont know how old I am.\n";
        }
    }
}

$h1 = new Human("John", 21);
$h2 = new Human("Doe", 30);
$h3 = new Human("Johnson");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();