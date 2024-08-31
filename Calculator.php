<?php 

//  we dont have use of calculator so we will make it abstract class 
// so that we will not able to initialize the property

// abstract methods k implementation nhi hota sirf declare hota h uska declartion hota hai child class meh 

abstract class Calculator 

{
    public $num1 ;

    public $num2 ;

    function __construct($num1,$num2)
    {

        $this -> num1 = $num1 ;

        $this -> num2 = $num2 ; 

    }

    abstract public function calculate(); 
}

?>