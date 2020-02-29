<?php 
require_once 'datalayer.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 $model = new datalayer(); 
if(isset($_GET['logout']))
{
  unset($_SESSION['loggedIn']);
        $_SESSION['username'] = '';
        $_SESSION['id'] = '';
}

 if (isset($_SESSION['loggedIn'])) {
     if ($_SESSION['loggedIn'] == true && isset($_SESSION['id'])) {
        header("Location: dashboard.php");
     }
     
 }

if (isset($_POST['username'])){
    $query = "WHERE username = :username AND pass_word = :pass";
    $vars = array(':username' => $_POST['username'],':pass' => $_POST['pass'] );
    $data = $model->selectQuery($query, $vars, false, 'user');

    //echo var_dump($data); test statement
   

    if (isset($data->username)) {
         $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $data->username;
        $_SESSION['id'] = $data->id;
        header("Location: dashboard.php");
    } else {
       $_SESSION['loggedIn'] = false;

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
    <link rel="stylesheet" href="theStyle.css">
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
        if ($_SESSION['loggedIn'] == false) {
        echo "username and/or password is incorrect";
    }
    }
    if (isset($_POST)) {
      // echo print_r($_POST); test statement
    }
    
    ?></td>
    </tr>
    
    </table></form>
</body>
</html>