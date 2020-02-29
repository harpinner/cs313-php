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
        $story;
        $storylines = array();
            $dataRow = array('id' => 'new');
            $dataRow['content'] = "Begin Writing new Storyline";
            $dataRow['title'] = "Enter Title" ;
            $dataRow['username'] = $_SESSION['username'];
            $dataRow['author'] = $_SESSION['id'];
            $dataRow['storytitle'] = 'Placeholer';
            $dataRow['story'] = '$this';
            $dataRow['event_i'] = '1';
            $dataRow['timeline_period'] = 2;
            $dataRow['creation_date']  = 'Now';
            $theLine = new storyline($dataRow);

        $model = new datalayer();

        $universes = $model->selectQuery('',array(),true,'universe');
        $users = $model->selectQuery('', array(), true, 'user');
        
        if (isset($_POST['subBtn'])) {
            if ($_POST['subBtn'] == 'Save') {
               if ($_POST['id'] == 'new') {
                 $varss = array(':title' => $_POST['title'] ,':description' => $_POST['description'],':producer'=> $_POST['producer'],':writer'=> $_POST['main_writer'] ,':universe_id' => $_POST['universe']);
                 $_GET['id'] = $model->intanQuery(story::insertQuery,$varss,true,'stories'); 
               } else {
                $varss = array(':title' => $_POST['title'] ,':description' => $_POST['description'],':producer'=> $_POST['producer'],':writer'=> $_POST['main_writer'],':universe_id' => $_POST['universe'],':id' => $_POST['id'] );
                $model->intanQuery(story::updateQuery,$varss,true,'stories'); 
               }
               if ($_POST['subBtn'] == 'Delete') {
                $model->intanQuery('DELETE FROM storylines WHERE story = :id',array(':id' => $_POST['id'] ),false ,'storylines'); 
                $model->intanQuery('DELETE FROM stories WHERE id = :id',array(':id' => $_POST['id'] ),false ,'stories'); 
                $_GET['id'] = 'new';
               
            }
        }
    }
//id story title timeline_period content

        if (isset($_POST['subBtn2'])) {
            if ($_POST['subBtn2'] == 'Save') {
               if ($_POST['id'] == 'new') {
                 $varss = array(':title' => $_POST['title'] ,':content' => $_POST['content'],':timeline_period'=> $_POST['timeline_period'],':author'=> $_POST['author'],':story' => $_POST['story'] );
                  $model->intanQuery(storyline::insertQuery,$varss,true,'storylines'); 
                  $_GET['id'] = $_POST['story'];
               } else {
                $varss = array(':title' => $_POST['title'] ,':content' => $_POST['content'],':timeline_period'=> $_POST['timeline_period'],':author'=> $_POST['author'], ':story' => $_POST['story'] , ':id' => $_POST['id'] );
                $model->intanQuery(storyline::updateQuery,$varss,true,'storylines'); 
                $_GET['id'] = $_POST['story'];
               }
               if ($_POST['subBtn2'] == 'Delete') {
                $model->intanQuery('DELETE FROM storylines WHERE id = :id',array(':id' => $_POST['id'] ),false ,'storylines'); 
                $_GET['id'] = $_POST['story'];
            }
        }
    }



        $id;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = 'new';
           
        }
        if ($id != 'new') {
            $qry = "WHERE storylines.story = :id ORDER BY order_num DESC";
            $vars = array(':id' => $id);
            $qry2 = "WHERE stories.id = :id";
            $story = $model->selectQuery($qry2,$vars,false,'story');
            $theLine->storyId = $story->id;
            $storylines = $model->selectQuery($qry,$vars,true,'storyline');
            $periods = $model->selectQuery("WHERE timeline_periods.universe_id = :id", array(':id' => $story->universe_id),true,'timeline_period');
        
        }
        else
        {
            $dataRow2 = array();
            $dataRow2['id'] = 'new';
            $dataRow2['producer'] = $_SESSION['id'];
            $dataRow2['title'] = 'New Title';
            $dataRow2['main_writer']= $_SESSION['id'];
            $dataRow2['main_writer_name'] = '';
            $dataRow2['universe_id'] = 1;
            $dataRow2['universe_name'] = '';
            $dataRow2['pro_user_name'] = '' ;
            $dataRow2['description'] = 'new description';
            $dataRow2['creation_date'] = '';
            $story = new story($dataRow2);
        }
        
       array_push($storylines,$theLine); 
        
          
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Story Editor</title>
    <link rel="stylesheet" href="theStyle.css">
</head>
<body>
    <header><h1>Story Editor</h1></header>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $story->id; ?>">
    <table>
    <tr><td>Title:</td><td><input type="text" name="title" id="" value="<?php echo $story->title?>"></td></tr>
    <tr><td>Description:</td><td><textarea name="description" id="" cols="30" rows="10"><?php echo $story->description?></textarea></td></tr>
    <tr><td>Producer:</td><td>
    <select name="producer" id="">
    <?php foreach ($users as $user):?>
    <option value="<?php echo $user->id; ?>" <?php echo $user->id == $story->producer ? 'Selected' : '';?>><?php echo $user->username; ?></option>
    <?php endforeach; ?>
    </select></td></tr>
    <tr> <td>Main Writer:</td> <td><select name="main_writer" id="">
    <?php foreach ($users as $user):?>
    <option value="<?php echo $user->id; ?>"  <?php echo $user->id == $story->main_writer ? 'Selected' : '';?>><?php echo $user->username; ?></option>
    <?php endforeach; ?>
    </select></td></tr>
    <tr><td><label for="universe">Universe: </label></td><td> <select name="universe" id="universe">
    <?php foreach ($universes as $universe):?>
    <option value="<?php echo $universe->id; ?>"><?php echo $universe->name; ?></option>
    <?php endforeach; ?>
    </select></td></tr>
    
   
    <tr><td colspan="2"><input type="submit" name="subBtn" value="Save"><input name="subBtn" type="submit" value="Delete"></td></tr>

    </table>
    
    
    </form>


    <?php if ($id == 'new'): ?>
    <h2>Save Story Before Creating the Chapters</h2>
        <?php else:?>
    <table>
    
    <tr>
    <td>Title:</td>
    <td>Description:</td>
    <td>Writer:</td>
    <td>Time Period:</td>
    <td>Created on:</td>
    <td></td>
    </tr>
    <?php foreach ($storylines as $storyline):?>
    <tr><form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $storyline->id; ?>">
    <input type="hidden" name="story" value="<?php echo $storyline->storyId; ?>">
    <td><input type="text" name="title" value="<?php echo $storyline->title; ?>"></td>
    <td><textarea name="content" id="" cols="30" rows="10"><?php echo $storyline->txt; ?></textarea></td>
    <td><?php echo $storyline->author; ?><input type="hidden" name="author" value="<?php echo $_SESSION['id']; ?>"></td>
    <td><select name="timeline_period" id="">
    <?php foreach ($periods as $period):?>
        <option value="<?php echo $period->id; ?>" <?php if ($period->id == $storyline->timeline_periodId){echo 'Selected';} ?>><?php echo $period->title; ?></option>
    <?php endforeach; ?>
    </select></td>
    <td><?php echo $storyline->creation_date ?></td>
    <td><input type="submit" name="subBtn2" value="Save"><input type="submit" name="subBtn2" value="Delete"></td>
    </form></tr>
    <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <footer>
        <ul id="bottom_menu">
            <li> <a href="index.php?logout=true">Log Out</a>  </li>
            <li> <a href="dashboard.php">Back to the Dashboard</a> </li>
        </ul>
    </footer>
 
</body>
</html>