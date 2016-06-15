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
		  <ul class="nav style-text-color-dropdown navbar-nav navbar-right">
		  		<li class = "style-text-color-cart-active"><a  href="admin_search_product.php">Search Products</a></li>	
				<li class = "style-text-color-cart-active"><a  href="admin_add_product.php">Add Products</a></li>
				<li class = "style-text-color-cart-active"><a  href="logout.php">Log out (Admin)</a></li>	
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	
	<!--End Header -->
	<!--Container -->
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6 col-xs-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><span class = 'glyphicon glyphicon-plus'></span> Admin - Add Product</h3>
					</div>
					<div class="panel-body">
						<div class = "row">
							<div class = "col-md-12 colxs-12">
								<form class='form-horizontal' method = 'post' action = 'add_product.php'>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='item_id' class='form-control' id='item_id' name = 'item_id' placeholder='Enter your item_id'>
										  <span class = 'glyphicon glyphicon-asterisk form-control-feedback'></span>
										</div>
									</div>		
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='item_name' class='form-control' id='item_name' name = 'item_name' placeholder='Enter your item_name'>
										  <span class = 'glyphicon glyphicon-gift form-control-feedback'></span>
										</div>
									</div>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='price' class='form-control' id='price' name = 'price' placeholder='Enter your price'>
										  <span class = 'glyphicon glyphicon-usd form-control-feedback'></span>
										</div>
									</div>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='type' class='form-control' id='type' name = 'type' placeholder='Enter your type'>
										  <span class = 'glyphicon glyphicon-list-alt form-control-feedback'></span>
										</div>
									</div>	
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='item_date' class='form-control' id='item_date' name = 'item_date' placeholder='Enter your item_date'>
										  <span class = 'glyphicon glyphicon-calendar form-control-feedback'></span>
										</div>
									</div>										
									<div class='row'>
										<div class='col-md-12 col-sm-12 col-xs-12'>
											<button type='submit' class='btn btn-default col-md-12 col-sm-12 col-xs-12'>Add Product</button>
										</div>
									</div>
								</form>								

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