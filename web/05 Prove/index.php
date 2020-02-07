<?php 
require_once 'dbconn.php'



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
<ul>
<?php foreach ($db->query("SELECT *  FROM   information_schema.tables") as $row): ?>

<li>
    <?php foreach ($row as $rowt): ?>
<?php echo $rowt?> |
<?php endforeach;?>
 </li>

 <?php endforeach;?>
 </ul>
</body>
</html>