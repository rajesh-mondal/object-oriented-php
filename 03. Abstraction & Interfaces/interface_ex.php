<?php
/*  A practical example of an interface */
class DistrictCollection implements IteratorAggregate {
    private $districts;

    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getDistricts() {
        return $this->districts;
    }

    function getIterator(): Traversable{
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add( "Rajshahi" );
$districts->add( district: "Bogra" );
$districts->add( "Sylhet" );
$districts->add( "Chittagong" );
$districts->add( "Comilla" );

foreach($districts as $district){
    echo $district."\n";
}