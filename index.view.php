<!DOCTYPE html>

<html lang="en" data-theme="dark">
    <!-- theme to light of  -->

    <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Arrays</title>
    
    <link rel="stylesheet" href="/pico.min.css">
</head>

<body>

    <?php 
    
    foreach($people as $Information){ 
    
    ?> 

<!-- here information is indexName where to refer string index of array of an array {name,age,localite} -->
    
    <details>
    <summary> 
        <strong>Name:</strong>     <?php echo $Information['name'] ?>          <br></summary>
    <p>
        <strong>Age:</strong>       <?php echo $Information['age'] ?>           <br>
        <strong>Localite:</strong>  <?php echo $Information['localite']?>       <br>

    </p>
    </details>
    <hr>
    
    <?php } ?>


</body>
</html>