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
	<!--Container -->
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 col.xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							<div class = "row">
								<div class = "col-md-6">
									<h5><span class = "glyphicon glyphicon-usd"></span>Check Out</h5>
								</div>
								<div class = "col-md-6">
									<a href="products.php" class="btn btn-primary btn-sm pull-right" role="button"><span class = "glyphicon glyphicon-share-alt"></span> Continue Shopping</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class = "row">
							<div class = "col-md-12 colxs-12">
								<form class="form-horizontal" action="process_payment.php" method="post" name="process_payment">
									<div class="form-group has-default has-feedback">
										<label for="first_name" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
										  <input  class="form-control" type="text" name = "name" id="name" value = "<?php  echo $_SESSION ['first_name'] ?>">
										  <span class = "glyphicon glyphicon-user form-control-feedback"></span>
										</div>
									</div>
									<!--<div class="form-group has-default has-feedback">
										<label for="last_name" class="col-sm-2 control-label">SurName</label>
										<div class="col-sm-10">
										  <input  class="form-control" id="last_name" name = "last_name" type="text" value = "<?php  echo $_SESSION ['last_name'] ?>">
										  <span class = "glyphicon glyphicon-user form-control-feedback"></span>
										</div>
									</div>-->
								  <div class="form-group has-default has-feedback">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" name = "email" id="email" value = "<?php  echo $_SESSION ['email'] ?>">
									  <span class = "glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								  </div>
									<div class="form-group has-default has-feedback">
										<label for="address" class="col-sm-2 control-label">Shipping Adress</label>
										<div class="col-sm-10">
										  <textarea class="form-control" id="address" name="address"></textarea>
										</div>
									</div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<select name = "card_type" class="form-control">
											<option value="Master Card">Master Card</option>
											<option value="American Express">American Express</option>
											<option value="Carte Blanche">Carte Blanche</option>
											<option value="Discover">Discover</option>
											<option value="Diner's Club">Diner's Club</option>
											<option value="enRoute">enRoute</option>
											<option value="JCB">JCB</option>
											<option value="Solo">Solo</option>
											<option value="Switch">Switch</option>
										</select>
									</div>
								  </div>
									<div class="form-group has-default has-feedback">
										<label for="card_no" class="col-sm-2 control-label">Card No</label>
										<div class="col-sm-10">
										  <input name="card_no" class="form-control" id="card_no" type="text" value="5500 0000 0000 0004" />
										  <span class = "glyphicon glyphicon-barcode form-control-feedback"></span>
										</div>
									</div>
									<div class="form-group has-default has-feedback">
										<label for="code" class="col-sm-2 control-label">Verification Code</label>
										<div class="col-sm-10">
										  <input  name = "code" class="form-control" id="code" type="text">
										  <span class = "glyphicon glyphicon-flag form-control-feedback"></span>
										</div>
									</div>	
									<div class="form-group has-default has-feedback">
										<label for="exp_date" class="col-sm-2 control-label">Exp. Date</label>
										<div class="col-sm-10">
										  <input  name = "exp_date" class="form-control" id="exp_date" type="text">
										  <span class = "glyphicon glyphicon-calendar form-control-feedback"></span>
										</div>
									</div>										
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-default">Check out</button>
									</div>
								  </div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<div class = "row">
							<div class = "col-md-9 col-xs-12 text-right">
								<?php 
								if (isset ($_SESSION['checkout_msg_error'])) 
								{
									echo "<h4><strong>" . $_SESSION['checkout_msg_error'] . "</strong></h4>";
									unset ($_SESSION['checkout_msg_error']);
								} else if (isset ($_SESSION['checkout_msg_success'])) 
								{
									echo "<h4><strong>" . $_SESSION['checkout_msg_success'] . "</strong></h4>";
									unset ($_SESSION['checkout_msg_success']);
								}
								?>
							</div>
							<div class ="col-md-3 col-xs-12">
								<a href="viewcart.php" class="btn btn-success btn-lg btn-block" role="button">Cancel Check Out</a>
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
					<p>Copyright &copy; 2016. <a href = "http://www.elhamharati.com/profile/biara/biara.php" target="_blank"> Biara </a><br/>Designed By <a href = "http://www.elhamharati.com" target="_blank"> Ellie Harati </a></p>
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