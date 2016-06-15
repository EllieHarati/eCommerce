<?php
//Start the session
session_start();
include 'cart.php';
//get the item_id and the quantity

$_SESSION['current_item_id']= $_POST ['item_id']; // only to show on the modal
$_SESSION['current_qty']=$_POST ['qty'];// only to show on the modal
$_SESSION['current_item_name']=$_POST ['item_name'];// only to show on the modal

$item_id= $_POST ['item_id'];
$qty=$_POST ['qty'];
$cart = new Cart();
$counter=0;
//Check whether there is an active session
if (isset($_SESSION['counter'])){
    //Read from session for the counter and the cart
	$counter = $_SESSION['counter'];
	//Unserialize convert the session onbject which is a string to a cart object
	$cart = unserialize ($_SESSION['cart']);
}  
else {
	//Otherwise set a session for the counter and the cart
	$_SESSION['counter'] = 0;
	$_SESSION['cart'] ="";
}
if (($item_id == "")or ($qty < 1))
{
   header("Location: products.php");
   exit;
}
else
{
	//connect to server and select database
	require_once ('conn_cartdb.php');
	//Create a select query to retrive the selected product 
	$query = "SELECT item_name, price FROM products WHERE (item_id = '$item_id')";
    //Run the mysql query
    $result= mysqli_query ($link, $query) or die ("Database Error");
	
    //If there is a matching recored select item_name, price
	if(mysqli_num_rows ($result) == 1) {
		$row = $result->fetch_assoc();
		$item_name = $row ['item_name'];
		$price = $row ['price'];
		//add items to the cart
		$new_item = new Item($item_id, $item_name, $qty, $price);
		$cart->add_item($new_item);
		//update the counter
		$_SESSION['counter'] = $counter+1;
		
		//convert the cart to a tex object and store in a session
		$_SESSION['cart'] = serialize($cart);
		//header ("Location: view_cart.php");
		header ("Location: products.php");
		exit();
	}
	else
	{
		//Redirect to back to the product page
		header ("Location: products.php");
		//echo $_SESSION['current_item_name'];
		exit();
	}
		//Redirect to the view_cart.php
    	mysqli_close($link);
		
}
$added_item_id = $item_id;
	
?>
