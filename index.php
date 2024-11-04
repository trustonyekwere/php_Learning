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

// echo rand(1 , 10); //echo random number
// $yes = true;
// $no = false;

// echo $yes;
// echo $no;

// $my_name = null;

//Indexed Arrays


$coretech_staff = ["Abdul", "Francis", "Sean", "Victor", "Collins", "NOVA"]; // array inputs

$coretech_staff[1] = "Ebube"; //to make changes to an array

array_push($coretech_staff, "Favor"); //to add array to the list

array_splice($coretech_staff, 2, 3); //to remove values

// print_r($coretech_staff); //output readable array to browser


//loop is running multiple codes simultaneously...

//types of loop are:
//for ($i=0; $i < ; $i++) { 
    # code...
//} -> For 

//foreach ($variable as $key => $value) {
    # code...
//} -> foreach

//->while
//->switchcase


//Associative Arrays

$about_me = ["full_name" => "Onyekwere Trust Enyinnaya Chimeremnka Tee Nova Noobie T-boy", "age" => 20, "hobby" => "Gaming"]; // array inputs

$about_me["height"] = 189;
$about_me["weight"] = 65;
$about_me["skin_color"] = "red"; // to add array

echo count($about_me);

array_pop($about_me); //Removes the last array added

print_r($about_me);

echo $about_me["hobby"];

//Multi-dimensional Arrays

$songs = [
    ["name" => "reggae", "duration" => 3, "vibe" => 8 ],
    ["name" => "pop", "duration" => 4, "vibe" => 10 ],
    ["name" => "reggae", "duration" => 3, "vibe" => 8 ],
];

$songs[] = ["name" => "rap", "duration" => 2.5, "vibe" => 200 ];

$songs[0]["name"];// how to get a single value from a multi-dimensional array (write the column number, then the value or name)


print_r($songs);

print_r($songs [1]);

//Assignment Operator (=)

$name = "Tee";

print_r($name);

//  Arithmetic operators (* , + , / , -)

$z = 1;
$x = 2;

$y = ($x**2 * $x)/  $x * $z;

print_r($y);

//BODMAS
//(Bracket Of Division, Multiplication, Addition, and Subtraction)

//Comparison Operators - are used to compare two values (number or string)
echo $a == $b; //$a is equal to $b
echo $a != $b; //$a is not equal to $b
echo $b <> $q; //$a is not equal to $b
echo $a === 3; //type check
echo $a > $b; //greater than
echo $a < $b; //less than
echo $a >= $b; //greater than or equal to
echo $a <= $b; //less than or equal to

//Increment/Decrement Operators
echo ++$a; //adds one
echo --$b; //removes one

//conditional statement
// if (condition) {
    # code...
// }
// else {} //opposite of if, if if doesn't meet the condition
// elseif (condition) {
    # code...
// }//starts where the if condition ends.


$recipe = [
    "name" => "Chocolate Cake", 
    "duration" => 5,
    "ingredients" => "eggs, chocolate-flavouring, flour, sugar, yeast, milk, butter",
    "description" => "Mix the dough thoroughly and stir evenly. bake in an oven for three hours!",
    "likes" => 99

];


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
    <div class="container">
    <!-- <h1>Hello World, my name is <?php echo $coretech_staff[5] ?></h1>
    <h4>I am  <?php echo $my_age ?> years old</h4> -->
    <br>
    <br>
        <h4>Below are the staff from the tech company Core-Tech</h4>
        <br>
        <br>
        <ol class="collection">
            <li class="collection-item"><?php echo $coretech_staff[0]?></li>
            <li class="collection-item"><?php echo $coretech_staff[1]?></li>
            <li class="collection-item"><?php echo $coretech_staff[2]?></li>
            <li class="collection-item"><?php echo $coretech_staff[3]?></li>
        </ol>
        <br>
        <br>
        <div class="row">
            <div class="col s12 l4">
                <div class="card z-depth-3">
                    <div class="card-image">
                        <img src="img/close-up-chocolate-cake.jpg" class="responsive-img" alt="">
                        <a class="btn-floating halfway-fab waves-effect waves-light red center z-depth-3"><?php echo $recipe["likes"]; ?></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title red-text"><?php echo $recipe["name"]; ?></span>
                        <p>
                            Preparation: <?php echo $recipe["duration"]; ?> minutes
                        </p>
                        <br>
                        <p>
                            <h6 class="red-text">Ingredients:</h6> <?php echo $recipe["ingredients"]; ?>
                        </p>

                        <p>
                            <h6 class="red-text">Description:</h6> <?php echo $recipe["description"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>