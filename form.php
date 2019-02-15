<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', 'MyNewPass', 'testcrud6');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Check whether the two passwords entered are identical
    if ($_POST['password'] == $_POST['confirmpassword']) {

        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']);

        $_SESSION['username'] = $username;
        if ($mysqli->query($sql) === true) {
            $_SESSION['message'] = "Registration successful! Your account has been created $username!";
            header("location: welcome.php");
        }

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        //If the query is successful, redirect the user to the welcome.php page.
        if ($mysqli->query($sql) === true) {
            $_SESSION['message'] = "Registration successful! Your account has been created $username!";
            header("location: welcome.php");
        } else {
            $_SESSION['message'] = "User could not be created";
        }

        

    } else {
        $_SESSION['message'] = "Passwords do not match!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up Form</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    
    
    <div class="body-content">
    <div class="module">
        <h1>Sign up</h1>
        <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="alert alert-error"><?php $_SESSION['message']; ?></div>
        <input type="text" placeholder="User Name" name="username" required />
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
        <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
        </form>
    </div>
    </div>
</body>
</html>

