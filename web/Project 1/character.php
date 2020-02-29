<?php
 require_once "datalayer.php";
 if (session_status() == PHP_SESSION_NONE) {
           
    session_start();
}
else {
    if ($_SESSION['loggedIn'] != true) {
        die();
    }
}
if (isset($_POST['submit_tn'])) {
    # code...
    //echo $_POST['submit_tn']; test statement
}

 $model = new datalayer(); 
$id;
$characterDisplay;

if (isset($_POST['submit_tn'])) {
    if ($_POST['submit_tn'] == 'Save') {
    $varss = array(':name' => $_POST['name'],':details' => $_POST['details']);
    if ($_POST['id'] == 'new') {
        $varss[':creator'] = $_POST['author'];
        $proof = $model->intanQuery(character::insertQuery,$varss,true,'characters'); 
        $_GET['id'] = $proof;
        //echo var_dump($proof); test statement
        
    } else {
        $varss[':id'] = $_POST['id'];
        $proof = $model->intanQuery(character::updateQuery,$varss);
        //echo var_dump($proof); test statement
    }
    
    # code...
} else if($_POST['submit_tn'] == 'Delete') {
    $model->intanQuery(datalayer::deleteQuery,$arrayName = array('id' => $_POST['id'] ));
}
 
}

 if (isset($_GET['id']) && $_GET['id'] != 'new') {
    $id = $_GET['id'];
    $characterDisplay = $model->selectQuery("WHERE characters.id = :id",array(':id' =>  $id),false,'character');
} else {
    $id = 'new';
    $arrayName = array('id' => $id );
    $arrayName['name'] = 'Insert Name';
    $arrayName['details'] = "Write YOur character's Details";
    $arrayName['creator'] = "";
    $arrayName['username'] = "";
    $arrayName['creation_date'] = "";
    $characterDisplay = new character($arrayName);
}
    


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaacter Editor</title>
    <link rel="stylesheet" href="theStyle.css">
</head>
<body>
<header><h1>Character Editor</h1></header>
<div id="contain">
    <article id="MainStuff">
        <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="author" value="<?php echo $_SESSION['id']; ?>">
        <table>
            <tr> <td>Character Name:</td><td><input type="text" name="name" id="" value="<?php echo $characterDisplay->name; ?>"></td></tr>
            <tr><td>Character Detials:</td><td><textarea name="details" id="" cols="30" rows="10"><?php echo $characterDisplay->details; ?></textarea></td></tr>
            <tr><td><input type="submit" name="submit_tn" value="Save"></td><td><input type="submit" name="submit_tn" value="Delete"></td></tr>
    
      
     
    
   
    </table>
    </form></article></div>
    <footer>
        <ul id="bottom_menu">
            <li> <a href="index.php?logout=true">Log Out</a>  </li>
            <li> <a href="dashboard.php">Back to the Dashboard</a> </li>
        </ul>
    </footer>
</body>
</html>