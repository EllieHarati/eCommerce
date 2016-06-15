<?php
	session_start();
	include 'cart.php';
	$cart = new Cart();
	$counter= $_SESSION['counter'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biara - Cart</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="jquery/jquery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Header -->
	<nav class="navbar navbar-default" style = "margin-bottom: 10px;">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="biara.php"><span class = "glyphicon glyphicon-gift"></span> Biara</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="dropdown style-text-color-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homewares <span class="caret"></span></a>
				<ul class="dropdown-menu homewares style-text-color">
					<ul class="list-unstyled col-sm-6 homewares-col1">
							<li><a href="products.php">Decor</a></li>
							<li><a href="products.php">Bed & Bath</a></li>
							<li><a href="products.php">Tableware</a></li>
							<li><a href="products.php">Kitchen</a></li>
							<li><a href="products.php">Lighting</a></li>
						</ul>
						<ul class="list-unstyled col-sm-6 homewares-col2">
							<li><a href="products.php">All Homewares categories</a></li>
							<li><a href="products.php">New Arivals</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="products.php">Sale</a></li>
							<li role="separator" class="divider"></li>
					</ul>
				</ul>
			</li>
			<li class="dropdown style-text-color-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Baby & Kids <span class="caret"></span></a>
				<ul class="dropdown-menu kids style-text-color">
					<ul class="list-unstyled col-sm-6 kids-col1">
						<li><a href="products.php">Kids Furniture</a></li>
						<li><a href="products.php">Kids Decor</a></li>
						<li><a href="products.php">Kids Rugs</a></li>
						<li><a href="products.php">Outdoor Play</a></li>
						<li><a href="products.php">Toys & Gifts</a></li>
					</ul>
					<ul class="list-unstyled col-sm-6 kids-col2">
						<li><a href="products.php">All Baby & Kids categories</a></li>
						<li><a href="products.php">New Arivals</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="products.php">Sale</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown style-text-color-dropdown">
				<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="loginDropdown"><span class = "glyphicon glyphicon-user"></span><?php if (!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) {echo ' Login';} else {echo " " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];}?></a>
				<ul class="dropdown-menu style-text-color" style = "padding: 10px; width: 300px;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style = "text-transform: uppercase;letter-spacing: 2px;">Biara User Account</h3>
						</div>
						<div class="panel-body">
							<?php
							if (!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) {
								echo "<form class='form-horizontal' method = 'post' action = 'login.php'>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
											<input type='email' class='form-control' id='email' name = 'email' placeholder='Enter your email address'>
											<span class = 'glyphicon glyphicon-envelope form-control-feedback'></span>
										</div>
									</div>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='password' class='form-control' id='password' name = 'password' placeholder='Enter your Password'>
										  <span class = 'glyphicon glyphicon-lock form-control-feedback'></span>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-12 col-sm-12 col-xs-12'>
											<button type='submit' class='btn btn-default col-md-12 col-sm-12 col-xs-12'>Log in</button>
										</div>
									</div>
								</form>
								<div class='row'>
									<div class='col-md-12'> 
										<p><a href='register.php' class='need-help'>New Customer? Create Account here</a></p>
									</div>
								</div>";								
							}
							?>

								<div class="row">
									<div class="col-md-12">
										<?php
											//session_start();
											if (isset ($_SESSION['first_name']) && isset ($_SESSION['last_name'])) {
												echo $_SESSION['msg'] ;
												echo $_SESSION['showLogoutBtn'];
											} if ((!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) && (isset ($_SESSION['msg'])))
											{
												echo $_SESSION['msg'] ;
												session_unset();
											} 
										?>
									</div>
								</div>
						</div>
					</div>
			  </ul>
			</li>
				<?php
					if (isset ($_SESSION['counter']) && ($_SESSION['counter']!=0)) {
						echo "<li class = 'style-text-color-cart-active'><a href='viewcart.php'><span class = 'glyphicon glyphicon-shopping-cart'></span> Cart <span class='badge'>" . $_SESSION['counter'] . "</span></a></li>";
					} else {
						echo "<li class='disabled style-text-color-cart-disabled'><a href='#'><span class = 'glyphicon glyphicon-shopping-cart'></span> Cart <span class='badge'>0</span></a></li>";
					}
				?>
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->

	</nav>	
	<!--End Header -->
	<!--Container -->
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 col.xs-12">
				<div class="panel panel-viewcart">
					<div class="panel-heading">
						<div class="panel-title">
							<div class = "row">
								<div class = "col-md-6">
									<h4><span class = "glyphicon glyphicon-shopping-cart"></span> My Cart</h4>
								</div>
								<div class = "col-md-6">
									<a href="products.php" class="btn btn-continueShopping btn-big pull-right" role="button"><span class = "glyphicon glyphicon-share-alt"></span> Continue Shopping</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<?php
						$total_price = 0;
						if ($counter == 0) 
						{
							echo"<h1>Shopping Cart</h1>";
							echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
							echo"<p><b> <a href=products.php>Go back to products </a> </b></p>";
						} else 
						{
							$cart = unserialize($_SESSION['cart']);
							//Get the depth of the cart
							$depth = $cart->get_depth();
							for ($i= 0; $i <$depth; $i++) 
							{
								$item = $cart->get_item($i);
								//Read the deleted items from cart
								$deleted = $item->deleted;
								//display if the item is not marked for deletion
									if (!$deleted) {
										$item_id = $item->get_item_id();
										$item_name = $item->get_item_name();
										$qty = $item->get_qty();
										$price = $item->get_price();
										$total_price =  $total_price + ($price*$qty);
										echo"
											<div class = 'row'>
												<div class = 'col-md-2 col-xs-12'>
													<img class = 'img-responsive' src = 'images/$item_id.jpg' width='253' height='200' alt = ''/>
												</div>
												<form  action=remove_from_cart.php method=POST>
												<div class = 'col-md-4 col-xs-12'>
													<h4><strong>$item_name</strong></h4>
													<h4><small>span span span span span span span span</small></h4>
												</div>
												<div class = 'col-md-6 col-xs-12'>
													<div class = 'col-md-2 text-right'>
														<h4><strong>$$price</strong></h4>
													</div>
													<div class = 'col-md-2 text-right'>
														<h4>$qty</h4>
													</div>

													<div class = 'col-md-4 col-xs-9'>
														<input name= 'item_no' type='hidden' id= 'item_no' value='$i' class='form-control input-sm'>
													</div>
													<div class = 'col-md-4 col-xs-2'>
														<button name=remove TYPE=submit id=remove value=Remove class = 'btn btn-warning btn-sm'><span class = 'glyphicon glyphicon-trash'></span></button>
													</div>
												</div>
												</form>
											</div>
											<hr>
										";
									}
							}
						}
						?>
					</div>
					<div class="panel-footer">
						<div class = "row">
							<div class = "col-md-9 col-xs-12 text-right">
								<h4><strong><?php echo "$" . $total_price; ?></strong></h4>
							</div>
							<div class ="col-md-3 col-xs-12">
							<?php
								if (isset ($_SESSION['counter']) && ($_SESSION['counter']!=0)) {
									echo "<a href='check_out.php' class='btn btn-success btn-lg btn-block' role='button'>Checkout</a>";
								} else {
									echo "";
								}
							?>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<!--End Container -->
	<!--Footer -->
	<div class = "container">
		<hr>
		<footer>
			<div class - "row">
				<div class = "col-md-12">
					<p class = "pull-right"><a href = "#">Back To Top</a>
					<p>Copyright &copy; 2016. <a href = "http://www.elhamharati.com/profile/biara/biara.php"> Biara </a><br/>Designed By <a href = "http://www.elhamharati.com" target="_blank"> Ellie Harati </a></p>
				</div>
			</div>
		</footer>
	</div>
	<!--End Footer -->	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>