
<?php 

$files1 = scandir(".");
$files2 = array();
foreach ($files1 as $result) {
    

    if (is_dir($result) ) 
    {
        if($result == '.' || $result == '..')
        {

        }
        else
        {
            array_push($files2, $result);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="theStyle.css">
    <title>Assignments</title>
</head>
<body>
    <header><h1>Mysite</h1><nav><ul id="top_menu"><li>Games</li> <li>Email</li> <li>Forums</li><li>Stories</li><li>Music</li><li>Technology</li><li>News</li></ul></nav><div id="the_date"><h4>The Current Time</h4> <span><?php echo date("l m d Y h:i:sa")  ?></span></div></header>

    <div id="contain">
    <section id="sidebar_1">
        <ul>
            <?php foreach($files2 as $work):  ?>
            <li> <a href="<?php echo $work ?>"><?php echo $work ?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <Article id="MainStuff">

    This Page Contains the link to the Assignments I will be doing for this class





    </Article>
    <section id="sidebar_2">
    <div>  the iron driver notices the steel maiden as they go on and wreak havok</div>
        <div>  the iron driver notices the steel maiden as they go on and wreak havok</div>
        <div>  the iron driver notices the steel maiden as they go on and wreak havok</div>
    </section></div>
    <footer>
        <ul id="bottom_menu">
            <li> item 1 </li>
            <li> item 1 </li>
            <li> item 1 </li>
            <li> item 1 </li>
            <li> item 1 </li>
            <li> item 1 </li>
            <li>item 1 </li>
        </ul>
    </footer>



    
</body>
</html>