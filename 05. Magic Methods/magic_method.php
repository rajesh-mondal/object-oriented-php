<?php
class Student {
    private $name;
    private $age;
    private $class;

    function __construct( $name = '', $age = '', $class = '' ) {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get( $prop ) {
        return $this->$prop;
    }

    public function __set( $prop, $value ) {
        $this->$prop = strtoupper( $value );
    }
}

$R = new Student( 'Rahim', '16', '10' );

$R->name = "Kamal";
echo $R->name;