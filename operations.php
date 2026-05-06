<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
    //String operation
   echo "string concatenation";
   
    $a = "<br>hello ";
    $b = "World";
    $c = $a.$b;
    echo $c;
    ?>

    //Arithmetic operation
    <?php
    echo "<br>Arithmetic operation";    
    $x = 10;
    $y = 5;
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;

    echo "<br>Sum: " . $sum;
    echo "<br>Difference: " . $difference;      
    echo "<br>Product: " . $product;
    ?>
</body>
</html>