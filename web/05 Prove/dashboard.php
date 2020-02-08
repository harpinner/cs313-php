<?php
         require_once 'dbconn.php';
         
         if (session_status() == PHP_SESSION_NONE) {
           
            session_start();
        }
        else {
            if ($_SESSION['loggedIn'] != true) {
                
            }
        }
          
        $stmt = $db->prepare("SELECT * FROM stories WHERE main_writer = :id OR producer = :id");
        $stmt->bindParam(':id', $_SESSION['id']);
        $stmt->execute();
        $stories = $stmt->fetchAll();




   
          ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<header><h1> Welcome   <?php  echo $_SESSION['username'];  ?></h1></header>

<h2>Your Universes</h2>
<p> </p>

<h2></h2>
<h2>Your Stories</h2>
    <table>
    <tr>
    <td>Title:</td>
    <td>Description:</td>
    <td>Created on:</td>
    </tr>
    <?php foreach ($stories as $story):?>
    <tr>
    <td><a href="story.php?id=<?php echo $story['id'] ?>"><?php echo $story['title'] ?></a></td>
    <td><?php echo $story['description'] ?></td>
    <td><?php echo $story['creation_date'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>

    
</body>
</html>