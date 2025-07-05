<?php
class A {
    static function sayHi() {
        echo "Hi from A";
    }
}

class B extends A {
    static function sayHi() {
        echo "Hi from B\n";
        parent::sayHi();
    }
}

B::sayHi();