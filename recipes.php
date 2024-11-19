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

            <h4 class="center-align" >RECIPES</h4>

            <?php foreach ($recipes as $recipe) { ?>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-1">

                        <div class="card-content">

                            <h5 class="red-text card-title"><?php echo $recipe ["recipe_name"] ?></h5><br>

                            <p>
                                Duration: <?php echo $recipe["duration"]; ?> minutes
                            </p><br>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>        
    </div>
    <br>

</body>
</html> 