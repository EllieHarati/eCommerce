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
	<script src="jquery/dropdownMenu.js"></script>

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
			<li><a href="admin.php">Admin</a></li>
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
		  <img src="images/04.jpg" alt="image4">
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
		<!-- Main Titles -->
		<div class = "row marketing">
			<div class = "col-md-4 col-sm-4 col-xs-12" style = "margin-bottom: 20px;">
				<img src="images/marketing01.jpg" alt="Marketing01" class="img-circle">
				<h2>Homeweares and Decoration</h2>
				<p>span span span span span span span span span span span span</p>
				<a href = "products.php" class = "btn btn-default">SHOP NOW</a>
			</div>
			<div class = "col-md-4 col-sm-4 col-xs-12" style = "margin-bottom: 20px;">
				<img src="images/marketing02.jpg" alt="Marketing02" class="img-circle">
				<h2>Baby and Kids Decoration and Toys</h2>
				<p>span span span span span span span span span span span span</p>
				<a href = "products.php" class = "btn btn-default">SHOP NOW</a>
			</div>
			<div class = "col-md-4 col-sm-4 col-xs-12" style = "margin-bottom: 20px;">
				<img src="images/marketing03.jpg" alt="Marketing03" class="img-circle">
				<h2>Be a Winner,</br>Sale and Clearance</h2>
				<p>span span span span span span span span span span span span</p>
				<a href = "products.php" class = "btn btn-default">SHOP NOW</a>
			</div>
		</div>
		<!-- End Main Titles -->
	</div>		
	<!-- End Container -->	
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