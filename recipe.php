<?php

include ("./connect.php");

$recipe_id = $_GET ["recipe_id"];

//echo $recipe_id;

$query = "SELECT * FROM `recipe_tb` WHERE `recipe_id` = '$recipe_id'";

$send_query = mysqli_query($connect, $query);

$recipe = mysqli_fetch_assoc($send_query);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <h2 style="margin-top: -10px;" class="blue darken-3 white-text center-align">
        <br>
        <p>RECIPE</p>
        <br>
        </h2>

        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-l6">
                        <div class="card z-depth-0">
                            <div class="card-content">
                                <img src="<?php
                                
                                echo $recipe['recipe_type'] 
                                
                                ?>.jpg" alt="" class="responsive-img"> 
                                <h2><?php echo $recipe['recipe_name'] ?></h2>
                                <span><b>Ingredients:</b> <?php echo $recipe['ingredients'] ?></span> <br><br>
                                <span><b>Duration:</b> <?php echo $recipe['duration'] ?> minutes</span> <br><br>
                                <span><b>Description:</b> <?php echo $recipe['description'] ?></span> <br><br>
                                <a class="btn-floating waves-effect waves-light red"><i class="material-icons">favorite</i></a>
                                <?php echo $recipe['likes'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php    
    include ("./footer.php")
?>