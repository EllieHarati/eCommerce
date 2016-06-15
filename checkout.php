<?php
//Start the session
session_start();
include 'cart.php';
$cart = new Cart();
$counter = $_SESSION['counter'];

echo $_SESSION ['first_name'] . " "  . $_SESSION ['last_name'] . "<br/>";

//check whether the cart is empty or not
if ($counter == 0)
    echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
else {
    $cart = unserialize($_SESSION['cart']);
    $depth = $cart->get_depth();
    echo"<h1>Shopping Cart</h1>";
    echo "<table border=1>";
    echo"<tr><td><b>Item Name</b></td><td><b>Quantity</b></td><td><b> Price</b></td><td><b>Total</b></td></tr>";
	 $total_price = 0;
	//Use a for loop to Iterate through the cart
    for ($i = 0; $i < $depth; $i++) {
        $item = $cart->get_item($i);
		//Read the deleted items from cart
        $deleted = $item->deleted;
        //display if the item is not marked for deletion
        if (!$deleted) {
            $item_id = $item->get_item_id();
            $item_name = $item->get_item_name();
            $qty = $item->get_qty();
            $price = $item->get_price();
			$qty_price = $price * $qty;
			//Calculate the total price
            $total_price =  $total_price + ($price*$qty);
            echo"<tr><td>$item_name</td><td>$qty </td><td>$price</td><td>$qty_price</td></tr>";
			//save totalprice
			$_SESSION ['total_price'] = $total_price;
        }
    }
   //Display the total price
   
    echo "</table>";
	echo  "Total Price:" . $total_price;
    echo"<p><b> <a href=view_cart.php>Remove Items from the Cart </a> </b></p>";
    echo"<p><b> <a href=payments.php>Proceed with Payments</a> </b></p>";
    echo"<p><b> <a href=products.php>Go back to products </a> </b></p>";
	
}
?>