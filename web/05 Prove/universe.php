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

        $stmt = $db->prepare("SELECT * FROM universes");
        $stmt->execute();
        $universes = $stmt->fetchAll();
        $data  = array();
        foreach ($universes as $universe) {
            $stmt = $db->prepare("SELECT * FROM stories WHERE universe_id = :universe");
            $stmt->bindParam(':universe', $universe['id']);
            $stmt->execute();
            $stories = $stmt->fetchAll();
            $d1 = array('stories' => $stories );
            foreach ($universe as $key => $value) {
                $d1[$key] = $value;
            }
        }
          
        

        
              
   
          ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Universes</title>
</head>
<body>
    <header><h1>All Universe Currently Being Done by the Company</h1></header>
     <?php foreach ($data as $key => $duniverse):?>
    <h2><?php echo $duniverse['name']; ?></h2>
    <p><?php echo $duniverse['description'];?></p>
    <table>
    <?php foreach ($duniverse['stories'] as $story):?>
    <tr>
    <td><a href="story.php?id=<?php echo $story['id']; ?>"><?php echo $story['title']; ?></a></td>
    <td><?php echo $story['description']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php endforeach; ?></table>
    
</body>
</html>