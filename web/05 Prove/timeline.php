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

        $stmt = $db->prepare("SELECT * FROM universes WHERE id = :universe");
        $stmt->bindParam(':universe', $_GET['universe']);
        $stmt->execute();
        $universe = $stmt->fetch();

          
        $stmt = $db->prepare("SELECT * FROM timelines WHERE universe_id = :universe");
        $stmt->bindParam(':universe', $_GET['universe']);
        $stmt->execute();
        $timeline = $stmt->fetch();

        
                $stmt = $db->prepare("SELECT * FROM timeline_periods WHERE universe_id = :universe ORDER BY order_num");
                $stmt->execute();
                $events = $stmt->fetchAll();
   
          ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $universe['title'];?> Timeline</title>
</head>
<body>
<header><?php echo $universe['title'];?> Timeline Events</header>

<?php foreach ($events as $value):?>
<h2><?php echo $value['title']?></h2>
<p><?php echo $value['description']?></p>
<?php endforeach; ?>
    
</body>
</html>