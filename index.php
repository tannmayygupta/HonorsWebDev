<?php

// print("Hello World<br>");

// // int 

// $age = 19;

// // float

// $age = 90.10;

// // boolean

// $boolean = true ;

// // String

// $name = "Tanmay Gupta <br>";
// echo($name);

// $name = "Tanmay";
// $subject = "Maths";

// echo("My name is $name my favorite subject is $subject");

// // as we use + to print variable with string 
// //here we use . 

// echo('My name is' .$name. 'my favorite subject is' .$subject. );


// // var_dump is used for variable data type

// var_dump($age);

// var_dump($name);

// var_dump($boolean);

// var_dump($age);

// // $name = "Tanmay";
// // $subject ="Maths";

// // echo("My name is <b> $name </b> my favorite subject is <b>$subject</b><br>");

// // array declaration in php

// // $ages = [13,12,15,14,78,69,70];

// // // var_dump($ages);

// // // we can define our own index in php

$name1 = [ "name"=>"tanmay <br>","rahul <br>","Harsh <br>"]; 
// where we can name index of array it can be string or any number but after that the memory 
// will be allocate linearly 

// // echo($name1['name']);
// // echo($name1[0]);
// // echo($name1[1]);

// $name1 = [ "Tanmay<br>","Rahul<br>","Harsh<br><br>"]; 

// // var_dump( $name1 );

// // sadharan tarikaa



// // using for loop in simple form

// for($i = 0 ; $i < count($name1) ; $i++){ // where count is used for no of element in array
//     echo($name1[$i]);
// }

// // for loop in adv form

foreach($name1 as $Naam){

    echo $Naam;

}

// // echo($ages[0]);

$Information = ["Name"=>"Tanmay Gupta","Age"=>18,"Localite"=>false];

// $Information["Gender"]="Male";
// $Information[-1]="Mae";
// $Information[-2]="Tam";


echo("<ul>");

foreach($Information as $index => $print){

    echo("<li> $index :  $print </li>");

}


// array of an array

//     foreach( $Information as $Key => $Value ) {
//         echo "<li>". $Key. ":" .$Value."</li>";
// }
// }

// echo("</ul>");

// <?php

// $age = '18' ;

// here a string is compared to an number

// if($age >= 18){ 
//     echo "adult" ;
// }
// else{
//     echo "Minor" ;
// }

// ?>

<!-- ?>     -->

<!-- variable are def with $ sign -->



<!-- after php tag that we write is html we can start php when needed  -->
<!-- My name is <strong><?php // echo($name) ?> </strong> -->
 
<!-- <u> Tanmay </u> -->