<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biara</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="jquery/jquery.js"></script>

  </head>
  <body>
	<!-- Header -->
	<nav class="navbar navbar-default" style = "margin-bottom: 0px;">
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
												session_destroy();
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
	<!-- Slide Show -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="images/01.jpg" alt="image1">
		  <div class="carousel-caption">
			<h3>Title Here Image1</h3>
			<p>span span span span span span span span span span span span</p>
		  </div>
		</div>
		<div class="item">
		  <img src="images/02.jpg" alt="image2">
		  <div class="carousel-caption">
			<h3>Title Here Image2</h3>
			<p>span span span span span span span span span span span span</p>
		  </div>
		</div>
		<div class="item">
		  <img src="images/03.jpg" alt="image3">
		  <div class="carousel-caption">
			<h3>Title Here Image3</h3>
			<p>span span span span span span span span span span span span</p>
		  </div>
		</div>
		<div class="item">
		  <img src="images/04.png" alt="image4">
		  <div class="carousel-caption">
			<h3>Title Here Image4</h3>
			<p>span span span span span span span span span span span span</p>
		  </div>
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- End Slide Show -->
	<div class="clearfix" style = "margin-bottom: 20px;"></div>
	<!-- Container -->
	<div class = "container">
		<!-- Marketing -->
			<!-- Products Thumbnail -->
			
			<div class = "row">
				<?php
					if (isset($_SESSION['current_item_name']) && ($_SESSION['current_item_name'] != "")) {
						echo"<h3>" . $_SESSION['current_item_name'] . "has been added to your cart</h3>";
						$_SESSION['current_item_name'] = "";
					} 
					//Connect to the database server and select the database
					require_once ('conn_cartdb.php');
					//Create a query to select all products
					$query = "SELECT item_id, item_name, price FROM products";
					$result=mysqli_query($link, $query);
					//Display products
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
					{
					   //Using the while loop populate all product in a table
					   $item_id  = $row ['item_id'];
					   $item_name =  $row ['item_name'];
					   $price = $row ['price'];
						  echo "<div class='col-sm-6 col-md-3'>";
							echo "<div class='thumbnail'>";
							  echo "<img src='images/$item_id.jpg' width='253' height='200'>";
							  echo "<div class='caption'>";
								echo "<h3>$item_id, $item_name</h3>";
								echo "<h5>$$price</h5>";
								echo "<p>span span span span span span span span span span span span</p>";
								//echo "<p><a href='$item_id.php' class='btn btn-primary' role='button'>Details</a> ";
								echo "
								<form class='form-horizontal' action = add_to_cart.php method = POST>
								<p><a href='#' class='btn btn-details' role='button' disabled='disabled'>Details</a>
								<button name='add' id = 'add' value = 'Add' type='submit' class='btn btn-add'>Add to cart <span class = 'glyphicon glyphicon-shopping-cart'></span></button>								
								  <div class='form-group'>
									<div class='col-sm-12'>
									  <input name = qty type = text id = qty value = 1 size = 2>
									</div>
								  </div>
								  <div class='form-group'>
									<div class='col-sm-10'>
									  <input name =item_id type = hidden id = $item_id value = $item_id>
									</div>
									<div class='col-sm-10'>
									  <input name =item_name type = hidden id = $item_name value = $item_name>
									</div>

								  </div>
								</form></p>
								";
								
							  echo "</div>";
							echo "</div>";
						  echo "</div>";
					} 
					mysqli_close($link);
					?> 					  
			</div>
			<!-- End Products Thumbnail -->
		<hr class = "divider">
		<!-- Footer -->
		<footer>
			<div class - "row">
				<div class = "col-md-12">
					<p class = "pull-right"><a href = "#">Back To Top</a>
					<p>Copyright &copy; 2016. <a href = "http://www.elhamharati.com/profile/biara/biara.php"> Biara </a><br/>Designed By <a href = "http://www.elhamharati.com" target="_blank"> Ellie Harati </a></p>
				</div>
			</div>
		</footer>
		<!-- End Footer -->
		<!-- End Marketing -->
		
	<!-- End Container -->	
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>