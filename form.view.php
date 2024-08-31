<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/pico.min.css">
<body>

<main >
    <?php if(!empty($_POST)): ?> 

        <!-- bahar la batara ki form post methd se hu kya  -->
        
        <?php if ($_POST['operation'] == 'add' ): ?> 

            <!-- yaha value se check kar rahe hai ki add karna hai ya mul -->

            <h2> The sum of <?= $_POST['num1'] ; ?> and <?= $_POST['num2'] ; ?> is <?= $sum ;?> </h2>
        
        <?php elseif ($_POST['operation'] == 'mul' ): ?>

            <h2> The product of <?= $_POST['num1'] ; ?> and <?= $_POST['num2'] ; ?> is <?= $mul ; ?> </h2>

        <?php endif; ?>

    <?php endif; ?>
        
</main>

<form method="post" > 
     <!-- hum agar method post nhi likhenge toh kaise hoga vo default method lega -->

        <lable for = Num1> Number 1 : </lable>
        <input type ="text" name ="num1" value="<?= !empty($_POST)?$_POST['num1']:'' ?>" >

        <!-- // value num1 aur num2 me issliye bcoz hume jo value humne dale vo bhi aayegi form me jo nhi aa rahi thi -->

        <lable for = Num1> Number 2 : </lable>
        <input type ="text" name = "num2" value="<?= !empty($_POST)?$_POST['num2']:'' ?>">  

        <input type = "radio" name="operation" id="add" value="add" <?= isset($sum) ? 'checked' : '' ?> >

        <!-- both radio button ka name same dege becz kisi ek ko hi select kar sake  -->
        <!-- value agar nhi dalenge toh debug karne pe ON aat ahai issliye value dalna padhta hai  -->
        
        <lable for = Add  > Add </lable>

        <br>
        <br>

        <input type = "radio" name="operation" id="mul" value="mul" <?= isset($mul) ? 'checked' : '' ?> > 
        <lable for = Mul > Mul </lable>
        
        <input type = "submit">

</form>

</body>
</html>