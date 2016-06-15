<?php
//Start the session
session_start();
include 'cart.php';
$cart = new Cart();
$counter= $_SESSION['counter'];
    
?>
<html>
<body>

<?php
echo $_SESSION ['first_name'] . " "  . $_SESSION ['last_name'] . "<br/>";
//check whether the cart is empty or not

if ($counter == 0) {
    echo"<h1>Shopping Cart</h1>";
    echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
    echo"<p><b> <a href=products.php>Go back to products </a> </b></p>";
} else {
    $cart = unserialize($_SESSION['cart']);
    //Get the depth of the cart
	$depth = $cart->get_depth();
    echo"<h1>Shopping Cart</h1>";
    echo "<table border=1>";
    echo"<tr><td><b>Item Name</b></td><td><b>Quantity</b></td><td><b> Price</b></td></tr>";
	//Use a for loop to Iterate through the cart
    for ($i= 0; $i <$depth; $i++) {
        $item = $cart->get_item($i);
		//Read the deleted items from cart
        $deleted = $item->deleted;
        //display if the item is not marked for deletion
        if (!$deleted) {
            $item_id = $item->get_item_id();
            $item_name = $item->get_item_name();
            $qty = $item->get_qty();
            $price = $item->get_price();
            echo "<tr><form  action=remove_from_cart.php method=POST>";
            echo"<td>$item_name</td><td>$qty </td><td>$price</td>";
            echo "<td> <input name= item_no type=checkbox id= item_no value=$i></td>";
            echo"<td><INPUT  name=remove TYPE=submit id=remove value=Remove></td>";
            echo "</tr></form>";
        }
    }

    echo "</table>";
    echo"<p><b> <a href=checkout.php>Checkout </a> </b></p>";
    echo"<p><b> <a href=products.php>Go back to products </a> </b></p>";
	echo"<h2><p><p><p> <a href=logout.php>Logout </a> </p></p></p></h2> ";
}
	?>
</body>
</html>
