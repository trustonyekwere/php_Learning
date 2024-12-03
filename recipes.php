<?php

//how to get data from a database

    //Step 1: Include the connect file

        include ("./connect.php");

    //Step 2: Write the fetch query

        $fetch_query = "SELECT * FROM `recipe_tb`";

    //Step 3: Send Query to database

        $send_query = mysqli_query($connect, $fetch_query);

    //Step 4: Receive data from Database

        $recipes = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

    //Step 5: Output the result

        // print_r($recipes)

        include ('./header.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe.com</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>


</style>

<body>

    <br>
    <div class="container">
        <div class="row">

            <?php foreach ($recipes as $recipe) { ?>
                <div class="col s12 m12 l3">
                    <div class="card z-depth-1">

                        <div class="card-image">
                            <img src="<?php echo $recipe['recipe_type'] ?>.png" alt="">
                        </div>

                        <div class="card-content">

                            <h5 class="blue-text card-title"><b><?php echo $recipe ["recipe_name"] ?></b></h5><br>

                            <p>
                                Duration: <?php echo $recipe["duration"]; ?> minutes
                            </p>
                            
                        </div>
                        <div class="card-action">
                            <a href="./recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div> <br><br>
        <div class="center-align">
            <a style="padding: auto;" class="btn btn-flat blue darken-3 white-text" href="./upload.php">UPLOAD</a>
        </div>       
    </div>
    <br>

<?php
    include ("./footer.php");
?>