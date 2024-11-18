<?php

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
        <h4>Core-Tech Staff</h4>
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