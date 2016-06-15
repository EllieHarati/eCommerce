<?php
session_start();
$total_price=$_SESSION ['total_price'];
//  PHP Paypal IPN Integration Class Demonstration File

// Setup class
require_once('paypal.class.php');  // include the class file
$p = new paypal_class;             // initiate an instance of the class
$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url when it is live change the url to real paypal
//$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
            
// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];//automatically detect server url

// if there is not action variable, set the default action of 'process'
if (empty($_GET['action'])) $_GET['action'] = 'process';  

switch ($_GET['action']) {
    
   case 'process':      // Process and order...capture buyers details
      $p->add_field('business', 'ellieseller@tafesa.org');
      $p->add_field('return', $this_script.'?action=success');
      $p->add_field('cancel_return', $this_script.'?action=cancel');
      $p->add_field('notify_url', $this_script.'?action=ipn');
      $p->add_field('item_name', 'Paypal Test Transaction'); // transaction name, you can choose any name
      $p->add_field('amount', $total_price);
	  $p->add_field('currency_code', 'AUD');
      $p->submit_paypal_post(); // submit the fields to paypal
      break;
   case 'success':      // Order was successful...
      echo "<html><head><title>Success</title></head><body><h3>Thank you for your order.</h3>";
      foreach ($_POST as $key => $value) 
	  { 
		//Display only SOME information on the report for client
		if ($key == "payer_id")
			echo "payer_id: $value<br/>";
		if ($key == "item_name")
			echo "item_name: $value<br/>";
		if ($key == "business")
			echo "business: $value<br/>";
		if ($key == "payment_date")
			echo "payment_date: $value<br/>";
		if ($key == "mc_gross")
			echo "mc_gross: $value<br/>";
	  }
      echo "</body></html>";
	  include 'cart.php';
		require_once('conn_cartdb.php');
		require_once('gen_id.php');

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
		$status = "Complete";
		//Create the insert query for the order table
    	$query = "INSERT INTO orders VALUES ('$order_id', '$email', '$total_price', '$status')";
		//Run the query using mysql_query()
		$resutl = mysqli_query ($link, $query) or die ("database error -orders");
      break;
   case 'cancel':       // Order was canceled...
      // The order was canceled before being completed.
      echo "<html><head><title>Canceled</title></head><body><h3>The order was canceled.</h3>";
      echo "</body></html>";
      break;
   case 'ipn':          
      if ($p->validate_ipn()) {
         $subject = 'Instant Payment Notification - Recieved Payment';
         $to = 'ellie@tafesa.org';    //  your email
         $body =  "An instant payment notification was successfully recieved\n";
         $body .= "from ".$p->ipn_data['payer_email']." on ".date('m/d/Y');
         $body .= " at ".date('g:i A')."\n\nDetails:\n";
         
         foreach ($p->ipn_data as $key => $value) { $body .= "\n$key: $value"; }
         mail($to, $subject, $body);
      }
      break;
 }     

?>