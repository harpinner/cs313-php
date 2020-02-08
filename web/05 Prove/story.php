<?php
        require_once 'dbconn.php';
          if (session_status() == PHP_SESSION_NONE) {
           
            session_start();
        }
        else {
            if ($_SESSION['loggedIn'] != true) {
                die();
            }
        }

        $stmt = $db->prepare("SELECT stories.id, stories.title, stories.description, stories.creation_date, producers.username AS p_name, producers.id AS p_id, producers.email AS p_email, main_writers.username AS mw_name, main_writers.id AS mw_id, main_writers.email AS mw_email FROM stories  LEFT JOIN users AS producers   ON stories.producer   = producers.id LEFT JOIN users AS main_writers  ON stories.main_writer = main_writers.id WHERE stories.id = :id;");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        $universe = $stmt->fetch();

          
        $stmt = $db->prepare("SELECT storylines.id, storylines.title, storylines.author, storylines.content, storylines.creation_date, users.id AS u_id, users.username, users.email, timeline_periods.id AS t_id, timeline_periods.title AS time_title FROM storylines  LEFT JOIN users ON storylines.author = users.id LEFT JOIN timeline_periods ON storylines.timeline_period = timeline_periods.id WHERE storylines.story = :id;");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        $storylines = $stmt->fetchAll();

        
          
   
          ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $universe['title'];?></title>
</head>
<body>
    <header><h1>Story: <?php echo $universe['title'];?></h1></header>
    <h2></h2>
    <p> Description: <?php echo $universe['description'];?></p>

    <h2>Storylines</h2>
    <table>
    <tr>
    <td>Title:</td>
    <td>Description:</td>
    <td>Writer:</td>
    <td>Created on:</td>
    </tr>
    <?php foreach ($storylines as $storyline):?>
    <tr>
    <td><?php echo $storyline['title'] ?></td>
    <td><?php echo $storyline['content'] ?></td>
    <td><?php echo $storyline['username'] ?></td>
    <td><?php echo $storyline['creation_date'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>