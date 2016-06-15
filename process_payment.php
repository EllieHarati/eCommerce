<?php
//Start the session
session_start();
require_once('phpcreditcard.php');//bank script validator for credit cards - bank will give it to us
//Read the values from the form
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$card_no = $_POST['card_no'];
$code = $_POST['code'];
$exp_date = $_POST['exp_date'];
$card_type = $_POST['card_type'];
$checkout_msg_error = "";  
$checkout_msg_success = "";
//Validate the text fields and the credit card
if (($name == "") OR ($email == "") or ($address == "") or ($email == "")or ($card_no == "") or ($code == "") or ($exp_date == ""))
{
    //echo"<p>Required Field(s) missing.</p>";
	$checkout_msg_error = "<p>All the field are required.</p>";
	$_SESSION['checkout_msg_error'] = $checkout_msg_error;
	header ("Location: payment.php");
}
//Vaidate the email address
elseif  (!(strstr($email, "@")) or !(strstr($email, ".")))
{
        //echo"<p>Invalid Email.</p>";
		$checkout_msg_error = "<p>Invalid Email.</p>";
		$_SESSION['checkout_msg_error'] = $checkout_msg_error;
		header ("Location: payment.php");
}
//Call checkCreditCard() function from phpcreditcard.php
elseif (checkCreditCard($_POST['card_no'], $_POST['card_type'] 
   ,$ccerror, $ccerrortext) != true)
{
echo $ccerrortext;
}
else{
//If there are no errors
include 'cart.php';
require_once('conn_cartdb.php');
require_once('gen_id.php');
$cart = new Cart();
$counter= $_SESSION['counter'];
if ($counter==0){
//echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
$checkout_msg_error = "<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
$_SESSION['checkout_msg_error'] = $checkout_msg_error;
header ("Location: payment.php");
}
else {
		//Convert the cart string to a cart object
		$cart = unserialize($_SESSION['cart']);
		$depth = $cart->get_depth();
		//Generate the order id
		$order_id = gen_id(8);
		
		//Use a for loop to Iterate through the cart
		$total_price = 0;
		for ($i = 0; $i<$depth; $i++) {
			$item = $cart->get_item($i);
			$deleted = $item->deleted;
			if (!$deleted){
				$item_id = $item->get_item_id();
				$qty = $item->get_qty();
				$price = $item->get_price();
				$total_price = $total_price + ($price*$qty);
				//Add the record to order_line table
				$query = "INSERT INTO order_line VALUES ('$order_id','$item_id',$qty)";
				//Create the insert query for the order_line table
				//Run the query using mysql_query()
    			$resutl = mysqli_query ($link, $query) or die ("database error -order_line");
    		}
		}
		//Add the record to order table
		$status = "pending";
		//$total_price =$_SESSION ['total_price'];
		//Create the insert query for the order table
    	$query = "INSERT INTO orders VALUES ('$order_id', '$email', '$total_price', '$status')";
		//Run the query using mysql_query()
		$resutl = mysqli_query ($link, $query) or die ("database error -orders");
		//$msg =  "Thank you for the order your order number is $order_id <br> Your order details has been emailed to your $_POST[email]";
		$checkout_msg_success = "<br><br><p><b> Thank you for shopping your order number is $order_id <br>. Your Shopping Cart is empty now. </b></p>";
		$_SESSION['checkout_msg_success'] = $checkout_msg_success;
		header ("Location: payment.php");
		unset($_SESSION['counter']);
		unset($_SESSION['cart']);
	}
}
?>
