

<?php
require_once 'datalayer.php';
if (session_status() == PHP_SESSION_NONE) {
 
  session_start();
}
else {
  if ($_SESSION['loggedIn'] != true) {
      die("You Are Not Logged In Son");
  }
}



$model = new datalayer();



$id;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 'new';
}


if (isset($_POST['saveUniverse'])) {
   if ($_POST['id'] == 'new') {
       $varss = array(':name' => $_POST['title'] ,':description' => $_POST['Description'],':creator'=>$_SESSION['id'] );
      $id = $model->intanQuery(universe::insertQuery,$varss,true,'universes'); 
      $_GET['id'] = $id;
   } else {
    $varss = $arrayName = array(':name' => $_POST['title'] ,':description' => $_POST['Description'], ':id' => $_POST['id']);
    $model->intanQuery(universe::updateQuery,$varss,false,'universes'); 
   }
   
}


if (isset($_POST['savePeriod'])) {
    if ($_POST['id'] == 'new') {
        $varss = array(':title' => $_POST['title'] ,':description' => $_POST['Description'],':universe_id'=>$_POST['universe_id'], ':order_num' =>$_POST['order_num']);
       $model->intanQuery(timeline_period::insertQuery,$varss,true,'timeline_periods'); 
       $id = $_POST['universe_id'];
    } else {
     $varss = array(':title' => $_POST['title'] ,':description' => $_POST['Description'],':universe_id'=>$_POST['universe_id'], ':order_num' =>$_POST['order_num'], ':id' => $_POST['id']);
     $model->intanQuery(timeline_period::updateQuery,$varss,false,'timeline_periods');
     $_POST['universe_id']; 
    }
    
 }

 if (isset($_POST['deletePeriod']) && $_POST['id'] != 'new') {
    $model->delQuery('timeline_periods',$_POST['id']);
 }










$universeDisplay;
$periods;
if ($id != 'new') {
    $universeDisplay = $model->selectQuery('WHERE universes.id = :id', array(':id' => $id),false,'universe');
    $periods = $model->selectQuery('WHERE timeline_periods.universe_id = :id ORDER BY timeline_periods.order_num', array(':id' => $id),true,'timeline_period');
    
} else {
    
    $dataRowU = array('id' => 'new');
    $dataRowU['name'] = 'New Universe';
    $dataRowU['creator'] =  $_SESSION['id'] ;
    $dataRowU['creator_name'] = $_SESSION['username'];
    $dataRowU['description'] = 'New Universe PLease Enter Description';
    $dataRowU['creation_date'] = 'new Date';
    $universeDisplay = new universe($dataRowU);
    $periods = array();
}





$dataRow = array('id' => 'new');
$dataRow['universe_id'] = $universeDisplay->id;
$dataRow['universe'] = $universeDisplay->name;
$dataRow['title'] = '';
$dataRow['description'] = '';
$dataRow['order_num'] = '';
  $theLine = new timeline_period($dataRow);
  array_push($periods,$theLine);








?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Editor   ?></title>
    <link rel="stylesheet" href="theStyle.css">
</head>
<body>
    <header><h1> the universe</h1></header>

        <form action="" method="post">
        <table>
        <input type="hidden" name="id" value="<?php echo $universeDisplay->id; ?>">
        <tr><td>Title:</td><td><input type="text" name="title" id="" value="<?php echo $universeDisplay->name; ?>"></td></tr>
        <tr><td>Description</td><td><textarea name="Description" id="" cols="30" rows="10"><?php echo $universeDisplay->description; ?></textarea></td></tr>
        <input type="submit" name="saveUniverse" value="Save">
        </table>
        </form>

        <?php if ($id == 'new'): ?>

        <h2>Save universe Before Writing Events</h2>



         <?php else:?>
         <h2>Important Events in the universe</h2>
         <?php foreach ($periods as $event):?>
        <form action="" method="post">
        <table>
        <input type="hidden" name="id" value="<?php echo $event->id; ?>">
        <input type="hidden" name="universe_id" value="<?php echo $event->universe_id; ?>">
        <tr><td>Title:</td><td><input type="text" name="title" id="" value="<?php echo $event->title; ?>"></td></tr>
        <tr><td>Description:</td><td><textarea name="Description" id="" cols="30" rows="10"><?php echo $event->description; ?></textarea></td></tr>
        <tr><td>Order Number:</td><td><input type="number" name="order_num" id="" value="<?php echo $event->order_num; ?>"></td></tr>
        <tr><td><input type="submit" name="savePeriod" value="Save"></td><td><input type="submit" name="deletePeriod" id="" value="Delete Event"></td></tr>
        
        </table>
        </form>
        <?php endforeach; ?>
        <?php endif; ?>
        <footer>
        <ul id="bottom_menu">
            <li> <a href="index.php?logout=true">Log Out</a>  </li>
            <li> <a href="dashboard.php">Back to the Dashboard</a> </li>
        </ul>
    </footer>
</body>
</html>