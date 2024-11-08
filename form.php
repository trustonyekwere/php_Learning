<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Recipe.com</title>
    <link rel="shortcut icon" href="./img/close-up-chocolate-cake.jpg" type="image/x-icon">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body{
            background: url(./img/5968949.jpg) no-repeat;
            background-size: cover;
        }
        .btn{
            color: white !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="container">
                <header>
                    <br><br>
                    <h4><b>LOGIN PAGE</b></h4>
                </header>
                <main>
                    <div class="row"><br>
                        <form action="form.php" method="GET" class="col s12">
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text" for="first_name"><b>Recipe Name</b></label><br>
                                    <input id="Recipe_name" required type="text" class="validate" data-length="10">
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text" for="textarea1"><b>Recipe Description</b></label><br>
                                    <textarea id="textarea1" required class="materialize-textarea"></textarea>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text" for="first_name"><b>Country of Origin</b></label><br>
                                    <input id="first_name" required type="text" class="validate" data-length="10">
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <label class="black-text" for="first_name"><b>Image URL</b></label><br>
                                    <input id="first_name" required type="url" class="validate" data-length="10">
                                </div>
                            </div>
                            <div class="center-align">
                                <button class="btn-flat black"><a href="" class="white-text"><b>SUBMIT</b></a></button>
                            </div>
                        </form>
                    </div>
                </main>
                <footer>
                    <p class="center-align" >&copy; Copyright Trust Onyekwere | Recipe.com 2024</p>
                </footer>
                </div>
            </div>
        </div>
</body>
</html>