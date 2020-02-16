<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Editor   ?></title>
</head>
<body>
<h1> the universe</h1>
        <form action="" method="post">
        <table>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <tr><td>Title:</td><td><input type="text" name="title" id=""></td></tr>
        <tr><td>Description</td><td><textarea name="Description" id="" cols="30" rows="10"></textarea></td></tr>
        <input type="submit" name="saveUniverse" value="Save">
        </table>
        </form>


         <h1>Important Events in the universe</h1>

        <form action="" method="post">
        <table>
        <input type="hidden" name="id" value="<?php echo $huh; ?>">
        <tr><td>Title:</td><td><input type="text" name="title" id=""></td></tr>
        <tr><td>Description</td><td><textarea name="Description" id="" cols="30" rows="10"></textarea></td></tr>
        <input type="submit" name="savePeriod" value="Save">
        </table>
        </form>
    
</body>
</html>