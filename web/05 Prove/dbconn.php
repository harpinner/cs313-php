<?php 
$db;


if (isset($_SERVER['DATABASE_URL'])) {
    try
    {
        $dbUrl = $_SERVER['DATABASE_URL'];

        $dbOpts = parse_url($dbUrl);

        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }



} else {
    try
    {
        
        $user = $_SERVER['DBUSER'];
        $password = $_SERVER['DBPASS'];
        $db = new PDO('pgsql:host=localhost;dbname=newdb', $user, $password);
      
        // this line makes PDO give us an exception when there are problems,
        // and can be very helpful in debugging! (But you would likely want
        // to disable it for production environments.)
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
}



?>