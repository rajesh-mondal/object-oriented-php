<?php
class MotorCycle {
    private $parameters;
    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        print_r( $this->parameters );
        unset( $this->parameters[$name] );
        print_r( $this->parameters );
    }

    function __get( $name ) {
        echo $this->parameters[$name];
    }

    function __set( $name, $value ) {
        echo $this->parameters[$name] = $value;
    }
}

$pulsar = new MotorCycle( '150cc', '16ltr', '40kmph' );

// $pulsar->displacement = '135cc';
// echo $pulsar->displacement;

if ( isset( $pulsar->tiresize ) ) {
    echo "Found\n";
} else {
    echo "Not Found\n";
}

unset( $pulsar->mileage );