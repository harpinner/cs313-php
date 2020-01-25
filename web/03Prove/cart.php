<?php

require "catalog.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] =  array( );
}

if (isset($_POST['deleteItemID'])) {
    unset($_SESSION['cart'][$_POST['deleteItemID']]);
}

$uri = $_SERVER[ 'REQUEST_URI'];
$indexLink = str_replace('cart.php', '', $uri);

$total = 0;
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

<header><h1>The Toy Cart</h1></header>



<?php if (count($_SESSION['cart'])>0): ?>
    <table>
  <tr>
    <th>Item Picture</th>
    <th>Item Name</th>
    <th>Item Price</th>
    <th>Quantity</th>
    <th>Remove Item Button</th>
  </tr>
  <?php foreach($_SESSION['cart'] as $key => $work):  ?>

    <?php $item = $catalog->toys[$work['itemID']];?>
    <?php $total = $total + (floatval($work['quantity']) * floatval($item->price)) ;?>
  <tr>
    <td><img src="<?php echo $item->type;  ?>.png" alt="nothing to see here folks" width></td>
    <td><?php echo $item->name;  ?></td>
    <td>$<?php echo $item->price;  ?></td>
    <td><?php echo $work['quantity'];  ?></td>
    <td>
        <form action="" method="post">
            <input type="hidden" name="deleteItemID" value="<?php echo $key ?>">
            <input type="submit" value="remove item">
        </form>

    </td>
  </tr>
  
  <?php endforeach; ?>
  <tr>
    <td colspan="4"><h3>Total Price: $<?php echo $total; ?></h3></td>
  </tr>
</table>

<footer>
<h3><a href="<?php echo $indexLink    ?>">Go Back to the catalog</a></h3>
<br><br><br><br><br><br><br><br><br>
<h3><a href="checkout.php">Go To Checkout IF YOu Are Satisfied</a></h3>
</footer>


<?php else: ?>


   <h2>There are No Items in the cart</h2>


<footer>
<h3><a href="<?php echo $indexLink   ?>">Go Back to the catalog</a></h3>
</footer>

<?php endif; ?>



    
</body>
</html>