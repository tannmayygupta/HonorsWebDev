<?php
// pascal first letter is capital as FirstName

// camelcase first letter is firstName 

// snake = first_name

// kabab = first-name 

// lower = firstname 

// uppercase = FIRSTNAME 

// oops 



// to create instances of the Person class and execute methods within the class
// body, which is not allowed in PHP


class Person {
    // class ke variable ko propweties
    
    public $name ;
    
    public $age ;

    public $islocal = false ;
    
    function __construct($name , $age){
        
        $this->name = $name ;
        $this->age = $age ;
    }
    
    function makeLocal(){
        
        $this -> isLocal = true ;
    }

}


$person1 = new Person("Tanmay Gupta",18);
$person2 = new Person("Raj",22);

$person1 -> makeLocal();


// array of an object 

$people = [ $person1 , $person2 ] ;


// to debug 
// var_dump($people);


include 'views/oops.view.php' ;

?>