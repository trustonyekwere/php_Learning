<?php

include ("./connect.php");

$recipe_name = "";
$duration = "";


if (isset ($_POST ["upload"])) {
    $recipe_name = $_POST ["recipe_name"];
    $duration = $_POST ["duration"];


    $upload_query = "INSERT INTO `recipe_tb`(`recipe_name`,`duration`) VALUES ('$recipe_name','$duration')";


    $send_query = mysqli_query($connect, $upload_query);


    if ($send_query) {
        header("Location: recipes.php");
    }  else {
        echo "Connection Error";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vids.com</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<body>
    <h4 class="blue darken-3 white-text center-align" style="margin-top: -10px !important; padding: 30px;" >
        <b>UPLOAD</b>
    </h4>


    <div class="container">
        <div class="container">
            <div class="container">
                <main>
                    <div class="row"><br>
                    <form action="upload.php" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text text-center" for="recipe_name"><b>Recipe Name</b></label><br>
                                    <input id="recipe_name" name="recipe_name" required type="text" class="validate" data-length="10">
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text" for="textarea1"><b>Duration</b></label><br>
                                    <textarea id="duration" name="duration" required class="materialize-textarea"></textarea>
                                </div>
                            </div>
                            <div class="center-align">
                                <input type="submit" name="upload" value="upload" id="upload" class="btn btn-flat white-text blue darken-3"> 
                            </div>
                        </form>    
                    </div>
                </main>
            </div>    
        </div>
    </div>