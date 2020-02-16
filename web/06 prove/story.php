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


        $users = $model->selectQuery('', array(), true, 'user');
        

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
            $storylines = $model->selectQuery($qry,$vars,true,'storyline');
            $periods = $model->selectQuery("WHERE timeline_periods.universe_id = :id", array(':id' => $story->universe_id),true,'timeline_period');
        }
        else
        {

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
</head>
<body>
    <header><h1>Story Editor</h1></header>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php $story->id; ?>">
    <table>
    <tr><td>Title:</td><td><input type="text" name="title" id="" value="<?php echo $story->title?>"></td></tr>
    <tr><td>Description:</td><td><textarea name="" id="" cols="30" rows="10"><?php echo $story->description?></textarea></td></tr>
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
    <tr><td colspan="2"><input type="submit" name="subBtn" value="Save"><input name="subBtn" type="submit" value="Delete"></td></tr>

    </table>
    
    
    </form>
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
    <td><textarea name="" id="" cols="30" rows="10"><?php echo $storyline->txt; ?></textarea></td>
    <td><?php echo $storyline->author; ?></td>
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
</body>
</html>