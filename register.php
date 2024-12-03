<?php

// print_r($_GET);

//Using the GET method

    //Creating empty variables to match the font fields

    $full_name = "";
    $email = "";
    $password = "";
    $message = "";

    //Check if register button is pressed.

    //also made the message to show only when register button is clicked.

    if (isset ($_GET["register"])) {
        $full_name = $_GET ["full_name"];
        $email = $_GET ["email"];
        $password = $_GET ["password"];
        $message = "Congratulations $full_name, you've registered successfully.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="./register.php" method="GET">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Register" name="register" id="register">
    </form>

    <h3><?php echo $message; ?></h3>

</body>
</html>