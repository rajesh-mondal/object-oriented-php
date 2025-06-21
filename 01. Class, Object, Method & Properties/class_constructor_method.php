<?php
class Human {
    public $name;
    public $age;

    function __construct( $personName, $personAge = 0 ) {
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi() {
        echo "Hello!\n";
        $this->sayName();
    }

    function sayName() {
        if ( $this->age ) {
            echo "My name is {$this->name}, I am {$this->age} years old.\n";
        } else {
            echo "My name is {$this->name}, I don't know how old I am.\n";
        }
    }
}

$h1 = new Human( "Rajesh", 25 );
$h2 = new Human( "David" );

$h1->sayHi();
$h2->sayHi();