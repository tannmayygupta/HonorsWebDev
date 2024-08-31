<?php 

class Mul extends Calculator
{
    public $num1 ;
    public $num2 ;

    function __construct($num1,$num2)
    {
        
        $this -> num1 = $num1 ; 

        $this -> num2 = $num2 ; 

    }

    function calculate()
    {

        return $this -> num1 * $this -> num2 ; 
    
    }
}

?>
