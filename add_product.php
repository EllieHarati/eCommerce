<?php
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$type = $_POST['type'];
$item_date = $_POST['item_date'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "cartdb";
//Connect to the server
//mysqli is the new object oriented connection method_exists
$link = mysqli_connect ($server, $user, $pass, $database)
	or die ("Error: Unable to connect to the database server");

require_once('conn_cartdb.php');

$query = "INSERT INTO products (item_id, item_name, price, type, item_date)
VALUES ('$item_id','$item_name','$price','$type','$item_date')";

if (mysqli_query($link, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
?>
