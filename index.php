<?php

$my_name = "Tee";
// echo $my_name;
    
$my_age = 17;
// echo $my_age;

$my_age = 25;
// echo $my_age;

// echo 'my name is $my_name'. 'I am $my_age years old' . "<br>";
// echo "my name is $my_name. I am $my_age years old" . "<br>";

//Pythagoras Theorem
// $b = 4;
// $c = 5;

// $pythagoras_theorem = sqrt($b**2 + $c**2);

// echo $pythagoras_theorem . "<br>";

//C of a circle
// $r = 20;

// $c = 2 * pi() * $r;

// echo $c . "<br>";

// $number = "7.00005";

// echo round($number);

// echo rand(1 , 10);
$yes = true;
$no = false;

echo $yes;
echo $no;

$my_name = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h1>Hello World, my name is <?php echo  $my_name; ?></h1>
    <h4>I am  <?php echo $my_age ?> years old</h4>
</body>
</html>