<?php 

class Add extends Calculator
{
    function __construct($num1,$num2)
    {
        
        $this -> num1 = $num1 ; 

        $this -> num2 = $num2 ; 

    }

    function calculate()
    {

        return $this -> num1 + $this -> num2 ; 

    }
}

?>
