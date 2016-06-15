<?php
session_start();

if (isset($_SESSION['email']))
{
	//Distroy the session
	//Redirect user back to the login page
	unset($_SESSION['email']);
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	unset ($_SESSION['showLogoutBtn']);
	$msg = "<p class = 'text-success'><span class= 'glyphicon glyphicon-ok'></span> Logout successful </p>";
	$_SESSION['msg'] = $msg;
	header ("Location: biara.php");
	exit;
} else {
	echo "Error";
}
?>
