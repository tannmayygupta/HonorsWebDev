<?php 

// include 'model/Calculator.php' 

// include 'models/Add.php' ;

// include 'models/Mul.php' ;

// ye three ko include karne se aacha hai hum ek folder banayenge
// usssme ek php file and ussme sab file inlude karke 

// ek ko hi include karenge 

include 'includes/bootstraps.php';


if(!empty($_POST))
{
    if ($_POST['operation'] == 'add' )
    {

        $add = new Add($_POST['num1'] , $_POST['num2']);
        $sum = $add -> calculate();

    }

    else if($_POST['operation'] == 'mul' )
    {

        $pro = new Mul($_POST['num1'] , $_POST['num2']);
        $mul = $pro -> calculate();
        
    }
}

include 'views/form.view.php' ;

// model layer 
// view layer
// controller 
?>


