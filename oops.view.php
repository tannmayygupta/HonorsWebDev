<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Details</title>
    <link rel="stylesheet" href="/pico.min.css">
</head>
<body>
<?php foreach($people as $person) { ?>
    <summary>
        <h2><strong>Name</strong> : <?= $person->name; ?></h2> <br>
    </summary>
    <h2><strong>Age</strong> : <?= $person->age; ?> </h2> <br>
    <h2><strong>Is Local</strong> : <?= $person -> isLocal ? 'Yes' : 'No' ; ?></h2> <br>
<?php } ?>
</body>
</html>