<?php 
require_once 'dbconn.php';

if (isset($_POST['name'])){

    $value = pg_escape_string($_POST['details']);
    $user = $_POST['user'] ;
    $user2 = $_POST['user2'] ;
    $stmt = $db->prepare("INSERT INTO stories (title, producer,  main_writer, description, universe_id) VALUES (:name, :user, :user2, :value, :universe)");
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':value', $value);
    $stmt->bindParam(':user',$user);
    $stmt->bindParam(':user2',$user2);
    $stmt->bindParam(':universe', $_POST['universe']);

    $stmt->execute();

}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
<form action="" method="post">
Title: <input type="text" name="name" id="">
Main Writer:<select name='user2'>
	<option value='1' selected='selected'>esigmund0</option>
	<option value='2'>rmeiklam1</option>
	<option value='3'>bjouanot2</option>
	<option value='4'>mpartridge3</option>
	<option value='5'>dclopton4</option>
	<option value='6'>bebhardt5</option>
	<option value='7'>jdambrogio6</option>
	<option value='8'>lfeltoe7</option>
	<option value='9'>araleston8</option>
	<option value='10'>tstelle9</option>
	<option value='11'>jchrispa</option>
	<option value='12'>egonthardb</option>
	<option value='13'>mselburnc</option>
	<option value='14'>lendd</option>
	<option value='15'>jbarnewelle</option>
	<option value='16'>rmoultrief</option>
	<option value='17'>bbrunig</option>
	<option value='18'>nmuglestonh</option>
	<option value='19'>jpoli</option>
	<option value='20'>lgrimmerj</option>
</select>
Producer:<select name='user'>
	<option value='1' selected='selected'>esigmund0</option>
	<option value='2'>rmeiklam1</option>
	<option value='3'>bjouanot2</option>
	<option value='4'>mpartridge3</option>
	<option value='5'>dclopton4</option>
	<option value='6'>bebhardt5</option>
	<option value='7'>jdambrogio6</option>
	<option value='8'>lfeltoe7</option>
	<option value='9'>araleston8</option>
	<option value='10'>tstelle9</option>
	<option value='11'>jchrispa</option>
	<option value='12'>egonthardb</option>
	<option value='13'>mselburnc</option>
	<option value='14'>lendd</option>
	<option value='15'>jbarnewelle</option>
	<option value='16'>rmoultrief</option>
	<option value='17'>bbrunig</option>
	<option value='18'>nmuglestonh</option>
	<option value='19'>jpoli</option>
	<option value='20'>lgrimmerj</option>
</select>
Universe: <select name='universe'>
	<option value='1' selected='selected'>Fantasy Noir  </option>
	<option value='2'>Fantasy Evolution</option>
	<option value='3'>Sci-Fi Setting </option>
</select>
<textarea name="details" id="" cols="30" rows="10">
    Default Text
</textarea>

<input type="submit" value="Enter Story">
</form></p>
<p>

<?php print_r($_POST) ?>

</p>



</body>
</html>