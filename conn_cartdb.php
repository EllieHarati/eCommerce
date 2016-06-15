<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "cartdb";
//Connect to the server
//mysqli is the new object oriented connection method_exists
$link = mysqli_connect ($server, $user, $pass, $database)
	or die ("Error: Unable to connect to the database server");
?>
