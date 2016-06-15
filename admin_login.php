<?php
//start the new session
session_start();

//Read the email and the password
$email = $_POST['email'];
$password=$_POST['password'];
if (($email=="") || ($password=="")) {
	//Redirect user back to the login page
	$msg = "<p class = 'text-danger'><span class= 'glyphicon glyphicon-remove'></span> Email or password is empty</p>";
	$_SESSION['msg'] = $msg;
	header ("Location: admin.php");
	exit;
} else if (($email!="admin@admin.com") || ($password!="password1")) {
	//Redirect user back to the login page
	$msg = "<p class = 'text-danger'><span class= 'glyphicon glyphicon-remove'></span> Email/password does not belong to admin. <br/>Please login as ADMIN</p>";
	$_SESSION['msg'] = $msg;
	header ("Location: admin.php");
	exit;
}
else
	{   
	//connect to server and select database
	require_once('conn_cartdb.php');
	//encrypt  the passporw
	$password = md5 ($password);
	//Create a select query to select user details using the email and the password
	$query = "SELECT * FROM customers WHERE (email = '$email') and (password = '$password')";

	$result = mysqli_query($link, $query) or die( "Invalid Customer ID or Password");

	//get the number of rows in the result set; should be 1 if a match NOT 0
	if (mysqli_num_rows($result) == 1) 
	{
   		//if authorized, get the values of firstname lastname, phone and email
		$row = $result->fetch_array();
		$first_name = $row ['first_name'];
		$last_name = $row ['last_name'];
		$phone = $row ['phone'];
		$email = $row ['email'];
    	
		mysqli_close($link);
		
		//save the values in session variables
		$_SESSION ['first_name'] = ucfirst($first_name);
		$_SESSION ['last_name'] = ucfirst($last_name);
		$_SESSION ['phone'] = $phone;
		$_SESSION ['email'] = $email;
		
		$msg="<p class = 'text-success'><span class= 'glyphicon glyphicon-ok'></span> Welcome " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "</p>";
		$showLogoutBtn = "<li role='separator' class='divider'></li><li><a href='logout.php'>Log out</a></li>";
		$_SESSION['msg'] = $msg;
		$_SESSION['showLogoutBtn'] = $showLogoutBtn;
		header ("Location: admin_add_product.php");
	}
	else
		{
			$msg = "<p class = 'text-danger'><span class= 'glyphicon glyphicon-remove'></span> Email does not appear to be in our system / Email and password do not match</p>";
			$_SESSION['msg'] = $msg;
			header ("Location: admin.php");
		}
}
?>
