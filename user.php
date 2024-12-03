<?php 

include ("./connect.php");

$user_id = $_GET ["user_id"];

//echo $user_id;

$query = "SELECT * FROM `users_tb` WHERE `user_id` = '$user_id'";

$send_query = mysqli_query($connect, $query);

$user = mysqli_fetch_assoc($send_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h2 style="margin-top: -10px;" class="blue darken-3 white-text center-align">
        <br>
        <p>USER</p>
        <br>
        </h2>

        <div class="container">
            <div class="container">
                <div class="card">
                    <div class="card-content">
                        <h1><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></h1>
                        <span><b>Email:</b> <?php echo $user['email'] ?></span> <br>
                        <span><b>Gender:</b> <?php echo $user['gender'] ?></span>
                    </div>
                </div>
            </div>
        </div>

<?php    
    include ("./footer.php")
?>