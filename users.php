<?php 

//include ("./header.php");

include ("./connect.php");

$fetch_query = "SELECT * FROM `users_tb`";

$send_query = mysqli_query($connect, $fetch_query);

$users = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

//print_r($users);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h2 style="margin-top: -10px;" class="blue darken-3 white-text center-align">
        <br>
        <p>USERS</p>
        <br>
        </h2>
    <div class="container">
        <div class="container">
            <div class="container">
                <br><br><table class="striped">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>First name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user ["user_id"] ?></td>
                                <td><?php echo $user ["first_name"] ?></td>
                                <td><a href="./user.php?user_id=<?php echo $user['user_id']; ?>">More Details</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table><br><br>
            </div>
        </div>
    </div>



<?php    
    include ("./footer.php")
?>