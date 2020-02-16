<?php
         require_once 'datalayer.php';
         
         if (session_status() == PHP_SESSION_NONE) {
           
            session_start();
        }
        else {
            if ($_SESSION['loggedIn'] != true) {
                die();
            }
        }
        $model = new datalayer(); 
        $qry =  "WHERE main_writer = :id OR producer = :id";
        $qry2 = "WHERE creator = :id";
        $vars  = array('id' => $_SESSION['id']);
        
        echo var_dump($_SESSION);
        echo '<BR>';
        $stories = $model->selectQuery($qry,$vars,true,'story');
        $universes = $model->selectQuery($qry2,$vars,true,'universe');
        $characters = $model->selectQuery($qry2,$vars,true,'character');
        
        echo var_dump($stories);
        echo '<BR>';


   
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
<p>   <table>
    <tr>
    <td>Title:</td>
    <td>Description:</td>
    <td>Created on:</td>
    </tr>
    <?php foreach ($universes as $universe):?>
    <tr>
    <td><a href="story.php?id=<?php echo $story->id; ?>"><?php echo $story->title; ?></a></td>
    <td><?php echo $universe->description; ?></td>
    <td><?php echo $universe->creation_date; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td><a href="universe.php?id=new">Create New Universe</a></td></tr>
    </table>
    </p>

<h2>Your Characters</h2>
<ul>
<?php foreach ($characters as $karach):?>
  <li><a href="character.php?id=<?php echo $karach->id; ?>"><?php echo $karach->name;?></a></li>
<?php endforeach; ?>
<li><a href="character.php?id=new">Create New Character</a></li>
</ul>
<h2>Your Stories</h2>
    <table>
    <tr>
    <td>Title:</td>
    <td>Description:</td>
    <td>Created on:</td>
    </tr>
    <?php foreach ($stories as $story):?>
    <tr>
    <td><a href="story.php?id=<?php echo $story->id ?>"><?php echo $story->title; ?></a></td>
    <td><?php echo $story->description; ?></td>
    <td><?php echo $story->creation_date; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td><a href="story.php?id=new">Create new story</a></td></tr>
    </table>
    

    
</body>
</html>