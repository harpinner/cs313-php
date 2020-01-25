<?php

require "catalog.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] =  array( );
}

if (isset($_POST["itemID"]) && isset($_POST["quantity"]) ) {
    $item = array(
        "itemID" => $_POST["itemID"],
        "quantity" => $_POST["quantity"],
    );




   array_push($_SESSION['cart'],$item); 
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <title>Toy Catalog</title>
</head>
<body>
<header><h1>Transformers Biomaster Toy Catalog</h1> <div>Cart Item Count: <?php echo count($_SESSION['cart']); ?>  |<a href="cart.php">View Cart</a></div></header>
<section id="itemGrid">

<?php foreach($catalog->toys as $key => $work):  ?>
<div class="storeItem"  data-description="<?php echo $work->description?>"  data-index-number="<?php echo $key;  ?>">
<img src="<?php echo $work->type;  ?>.png" alt="something went wrong" width="250px" height="180px">
<span><?php echo $work->name;  ?></span>
<span>$<?php echo $work->price;  ?></span>
</div>
<?php endforeach; ?>


</section>
    
</body>
<script src="jquery-ui/external/jquery/jquery.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
 $(function() {
$( "#cartAdder" ).dialog({
	autoOpen: false,
    width: 500,
	buttons: [
		{
			text: "Add Item to Cart",
			click: function() {

				$( this ).dialog( "close" );
                console.log($( "#cartAdder" ).attr('data-index-number'));
                console.log($('#itemNum').val());
                var tdata = new FormData();
                tdata.append("quantity", $('#itemNum').val());
                tdata.append("itemID", $( "#cartAdder" ).attr('data-index-number'));

                $.ajax({
                    type: "POST",
                    url: "",
                    data: tdata,
                    processData: false,
                    contentType: false,
                    success: function() {   
                            location.reload();  
                            }
                        });








			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( ".storeItem" ).click(function( event ) {
  
   
    $( "#cartAddName" ).text($(event.target).parent().children(":nth-child(2)").text());
    $( "#cartAddPrice" ).text($(event.target).parent().children(":nth-child(3)").text());
    
    $("#theIMG").attr('src',$(event.target).parent().children("img").attr('src'));
    $( "#cartAdder" ).attr('data-index-number',$(event.target).parent().attr('data-index-number'));
    $( "#desc" ).text($(event.target).parent().attr('data-description'));
 

	$( "#cartAdder" ).dialog( "open" );
	event.preventDefault();
});
});
</script>



<div id="cartAdder" class="storeItem" data-index-number="0">
<img id="theIMG" src="default.png" alt="something went wrong" >
<span id="cartAddName">Product Name</span>
<span id="cartAddPrice">$Product Price</span>
<span>Quantity: <input type="number" name="quantity" id="itemNum"></span>
<p id="desc">Default Dummy Description</p>
</div>



</html>