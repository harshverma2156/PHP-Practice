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
<br><br>
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
    <br><br>
    //Comparison operation
    <?php       
    echo "<br>Comparison operation";
    $num1 = 10;
    $num2 = 20;
    if ($num1 > $num2) {
        echo "<br>$num1 is greater than $num2";
    } elseif ($num1 < $num2) {
        echo "<br>$num1 is less than $num2";
    } else {
        echo "<br>$num1 is equal to $num2";
    }
    ?>

    <br>,<br>
    //Logical operation
    <?php
    echo "<br>Logical operation";
    $age = 25;
    $isStudent = true;
    if ($age > 18 && $isStudent) {
        echo "<br>You are an adult student.";
    } else {
        echo "<br>You do not meet the criteria.";
    }
    ?>
</body>
</html>