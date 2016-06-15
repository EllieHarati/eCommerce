<?php

// get the id parameter from URL
$id= $_GET ["id"]; 
//$hint="";

//varable to hold user info
$info = "";

//database information
$server = "localhost";
$user = "root";
$password = "";
$database = "cartdb";
$link = mysqli_connect($server, $user, $password, $database) or die ("Database connection error" .mysqli_error ($link));
echo "Connect to $database" . "</br>";

//create the SQL query
$query = "select * from products where item_id = ".$id;

//make the database connection
$info="";
$result = mysqli_query ($link, $query);
if (mysqli_num_rows ($result) > 0) 
{
	$row = mysqli_fetch_array ($result, MYSQL_ASSOC);
	//ALTERNATIVE METHOD $ROW = $RESULT->FETCH_ARRAY();
	$info = "Item Name:" . $row ['item_name'] . "<br />" . "Price:" . $row ['price']. "</br> " . "Type: " . $row ['type']. "</br> " . "Item Date: " .  $row ['item_date']. "</br> " ."Item ID: " .  $row ['item_id'] . "<br/>"; 
}else{
	$info = "user with ID $id doesn't exist";
}

echo $info;

mysqli_close ($link);

?>