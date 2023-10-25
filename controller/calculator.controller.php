<?php  

include_once 'Model/calculator.php'; 

class Controller_calculator{

    private $object;
    public function __construct(){
        $this->object = new Model_calculator();
    }

    public function Inicio(){
        require_once 'view/calculator.php';
    }
}

?>