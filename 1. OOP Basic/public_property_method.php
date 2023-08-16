<?php
// class
class Fund {
    private $fund;

    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }

    public function addFund( $money ) {
        $this->fund += $money;
        $this->deductFund( 0 );
    }

    private function deductFund( $money ) {
        $this->fund -= $money;
    }

    public function getTotal() {
        echo "Total Fund is {$this->fund}\n";
    }
}

$ourFund = new Fund( 100 );
// $ourFund->fund = 70;
$ourFund->getTotal();
$ourFund->addFund( 10 );
// $ourFund->deductFund(7);
$ourFund->getTotal();