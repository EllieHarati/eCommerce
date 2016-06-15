<?php
session_start();
	//Capture the user inputs from the form
    $first_name=$_POST['first_name']; //Read first name from the form
    $last_name=$_POST['last_name']; //Read last name from the form
	$phone = $_POST ['phone']; //Read tel. no. from the form
	$email  = $_POST ['email']; //Read email from the form
	$password  = $_POST ['password'];//Read password from the form
	$repassword = $_POST ['repassword'];//Read re-password from the form
    $msg_signin = "";
	
	//Validate user inputs
    if (($first_name == "") or ($last_name == "") or ($email == "")or ($password == ""))
    {
		$msg_signin = "All fields are required.";
		$_SESSION['msg_signin'] = $msg_signin;
		header ("Location: signup.php");
    }
    elseif  (!(strstr($email, "@")) or !(strstr($email, ".")))
    {
		$msg_signin = "Invalid email. Please try again.";
		$_SESSION['msg_signin'] = $msg_signin;
		header ("Location: signup.php");
     }
    elseif ($password != $repassword)
    {
		$msg_signin = "Password mismatch. Please try again.";
		$_SESSION['msg_signin'] = $msg_signin;
		header ("Location: signup.php");		
    }
    else
    {
    //Connect to the server and add a new record 
	require_once('conn_cartdb.php');
	//encrypt  the passporw I will do that on phase 3
	$password = md5 ($password);
	//Define the insert query
    $query = "INSERT INTO customers VALUES ('$first_name','$last_name','$phone','$password','$email')";
	//Run the query
    mysqli_query($link, $query) or die( "Error: Unable to insert this record. Please try again.");
    mysqli_close($link);
	//Start a session and sent data to session
	$_SESSION['first_name'] = $first_name;
	$_SESSION['last_name'] = $last_name;
	//echo $first_name . "<br/>". $last_name . "<br/>";
	header ("Location: signup.php");
	}
exit(); //exit session
?>
