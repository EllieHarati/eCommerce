<?php
//Start the session
session_start();	
include 'cart.php';

$item_no = $_POST['item_no'];
//If the item is not empty
if ($item_no != "") {
    $counter = $_SESSION['counter'];
    $cart = new Cart();
    $cart = unserialize($_SESSION['cart']);
    //delete selected item from the cart
    $cart->delete_item($item_no);
    //update the counter
	$_SESSION['counter'] = $counter -1;
    //Decrement the counter by one 
	//Serialize and add back to the session
    $_SESSION['cart'] = serialize($cart);
    //Redirect to the viewcart.php
	header ("Location: viewcart.php");
	exit();
}
	
?>
