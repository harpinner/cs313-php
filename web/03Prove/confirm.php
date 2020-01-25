<?php

require "catalog.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] =  array( );
}

$total = 0;
foreach($_SESSION['cart'] as $key => $work)
{
    $item = $catalog->toys[$work['itemID']];
    $total = $total + (floatval($work['quantity']) * floatval($item->price));
}

$items = array();

foreach($_SESSION['cart'] as $key => $work)
{
    $item = $catalog->toys[$work['itemID']];
    $total = $total + (floatval($work['quantity']) * floatval($item->price));

   $cartItem = array();
   $cartItem['name'] = $item->name;
   $cartItem['qty'] = floatval($work['quantity']);
   $cartItem['price'] = floatval($item->price);
   array_push($items,$cartItem);
}

$street = htmlentities($_POST['street']);
$name = htmlentities($_POST['name']);
$city = htmlentities($_POST['city']);
$state = htmlentities($_POST['state']);
$zip = htmlentities($_POST['zip']);








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
<header><h1>Your Order is Complete</h1></header>

<section >
<h4 >Your Items</h2>
<table >

  <tr>
    <th style="border:1px solid white" >Name</th>
    <th style="border:1px solid white" >Quantity</th>
  </tr>
  <?php foreach($items as $finalItem):?>
  <tr>
    <td style="border:1px solid white" ><?php echo $finalItem['name']; ?></td>
    <td style="border:1px solid white" ><?php echo $finalItem['qty']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</section>

<section>
    <h5>Your Items Will Be Shipped to this address</h5>
    <section  style="float:left;background-color:green;display:block;">
<h4 style="text-align:center">Your Shipping Address</h2>
<table >
    <form action="confirm.php" method="post">
  <tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>Street Address<br></td>
    <td><?php echo $street; ?></td>
  </tr>
  <tr>
    <td>City</td>
    <td><?php echo $city; ?></td>
  </tr>
  <tr>
    <td>State</td>
    <td><?php echo $state; ?></td>
  </tr>
  <tr>
    <td>Zip</td>
    <td><?php echo $zip; ?></td>
  </tr>
</form>
</table>
    
</section>

    
</body>
</html>