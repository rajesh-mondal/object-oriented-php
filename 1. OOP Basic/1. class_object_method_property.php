<?php
// Class, Object, Method, Property
class Human {
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
    }

    function sayName() {
        echo "My name is {$this->name}\n";
    }
}

class Cat {
    function sayHi() {
        echo "Meow\n";
    }
}

class Dog {
    function sayHi() {
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "John"; //set
$h2->name = "Johnson";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
// $h1->sayName();
// echo $h1->name; //get

$h2->sayHi();
// $h2->sayName();
// echo $h2->name; //get