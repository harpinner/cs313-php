<?php 
require_once 'dbconn.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['username'])){

    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND pass_word = :pass");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':pass', $_POST['pass']);
    $stmt->execute();
    $user = $stmt->fetch();

    if (isset($user['username'])) {
         $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
       $_SESSION['loggedIn'] = 'failed';

    }
    



}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header><h1>Login Page</h1></header>
    <form action="" method="post">
    <table>
    <tr>
    <td>Username:</td>
    <td><input type="text" name="username" id=""></td>
    <td></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="password" name="pass" id=""></td>
    </tr>
    <tr>
    <td><input type="submit" value="Login"></td>
    <td><?php if (isset($_SESSION['loggedIn'])) {
        if ($_SESSION['loggedIn'] == 'failed') {
        echo "username and/or password is incorrect";
    }
    }
    if (isset($_POST)) {
       echo print_r($_POST);
    }
    
    ?></td>
    </tr>
    
    </table></form>
</body>
</html>