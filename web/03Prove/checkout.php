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




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place Your Order</title>
</head>
<body>
<header>
    <h1>Enter Address To Complete Your Order</h1>
</header>

<section style="float:left;background-color:grey;display:block;margin:10px;border:1px solid white">
<h4 style="text-align:center">Your Complete Order</h2>
<table >

  <tr>
    <th style="border:1px solid white" >Name</th>
    <th style="border:1px solid white" >Price</th>
    <th style="border:1px solid white" >Quantity</th>
  </tr>
  <?php foreach($items as $finalItem):?>
  <tr>
    <td style="border:1px solid white" ><?php echo $finalItem['name']; ?></td>
    <td style="border:1px solid white" >$<?php echo $finalItem['price']; ?></td>
    <td style="border:1px solid white" ><?php echo $finalItem['qty']; ?></td>
  </tr>
  <?php endforeach; ?>
  <tr>
    <td style="border:1px solid white" colspan="3">Total Price: $<?php echo $total; ?></td>
  </tr>
</table>
</section>




<section  style="float:left;background-color:green;display:block;">
<h4 style="text-align:center">Your Shipping Address</h2>
<table >
    <form action="confirm.php" method="post">
  <tr>
    <th>Name</th>
    <th><input type="text" name="name" id=""></th>
  </tr>
  <tr>
    <td>Street Address<br></td>
    <td><input type="text" name="street" id=""></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type="text" name="city" id=""></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input type="text" name="state" id=""></td>
  </tr>
  <tr>
    <td>Zip</td>
    <td><input type="text" name="zip" id=""></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Place Order"></td>
  </tr>
</form>
</table>
    
</section>

<table >


<footer style="clear:both">
<h3><a href="cart.php">Go Back to the cart if you are not sure</a></h3>
</footer>

</body>
</html>