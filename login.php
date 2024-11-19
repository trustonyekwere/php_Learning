<?php 

    $username = "";
    $password = "";
    $message = "";

    if (isset ($_POST ["login"])) {
        $username = $_POST ["username"];
        $password = $_POST ["password"];
        $message = "Login Successful!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Login" name="login" id="login">
    </form>

    <h3><?php echo $message; ?></h3>

</body>
</html>